<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;

class CausesController extends Controller
{

    // ------------------------------------------------------------------------------------------
    // ------------------------------------------------------------------------------------------
    // Below are the routes on the Front-end

    public function getCauses()
    {
        // Fetch all active causes
        $all_causes = DB::table('active_causes')
            ->where('campaign_status', 'cause_active')
            ->orderBy('id', 'desc')
            ->get();
    
        // Calculate collected amount for each cause
        foreach ($all_causes as $cause) {
            $totalAmount = 0;
    
            $collected_amounts = DB::table('people_donations')
                ->where('campaign_id', $cause->id)
                ->get();
    
            foreach ($collected_amounts as $donation) {
                $totalAmount += $donation->person_amount;
            }
    
            $cause->all_sum = number_format($totalAmount, 2, '.');
        }

        // dd($all_causes); 
    
        // Return view with causes
        return view('main_pages_files.discover', ['all_causes' => $all_causes]);
    }


        public function allDonations ($id) { 

            // Check if the cause exists in the database with the decoded name
            $single_cause = DB::table('active_causes')
                ->where('id', $id)
                ->first();

            if(!$single_cause) { 
                return view('404');
            }

            $email = $single_cause->email;
            
            $campaign = DB::table('users')
            ->where('email', $email)
            ->first();

            $campaign_name = $campaign->name;
                

            // If a cause is found, retrieve donations
            if (!empty($single_cause)) {
                
                if($single_cause->campaign_status !== 'cause_active') { 
                    return redirect('/');
                }

                $collected_amount = DB::table('people_donations')
                ->where('campaign_id', $single_cause->id)
                ->get();
                                
                           

                return view('main_pages_files.all-donations', [
                    'single_cause' => $single_cause,
                    'all_collected_paymanets' => $collected_amount,
                    'campaign_reason' => $campaign_name, 
                ]);
            } else {
                // If no cause is found, redirect to the causes list page
                return redirect()->route('frontEndCauses');
            }
            
            
            
        }

        public function singleCause($id) {
                
            // Check if the cause exists in the database with the decoded name
            $single_cause = DB::table('active_causes')
                ->where('id', $id)
                ->first();

            if(!$single_cause) { 
                return view('404');
            }

            $email = $single_cause->email;
            
            $campaign = DB::table('users')
            ->where('email', $email)
            ->first();

            $campaign_name = $campaign->name;
                

            // If a cause is found, retrieve donations
            if (!empty($single_cause)) {
                
                if($single_cause->campaign_status !== 'cause_active') { 
                    return redirect('/');
                }
                
                // dd($single_cause);
                $all_people_donations = DB::table('people_donations')
                ->where('campaign_id', $single_cause->id)
                ->orderByRaw('CAST(person_amount AS UNSIGNED) DESC')
                ->limit(2)
                ->get();

                $collected_amount = DB::table('people_donations')
                ->where('campaign_id', $single_cause->id)
                ->get();
                                
                    
                $totalAmount = 0;
                    
                foreach($collected_amount as $donation) { 
                      $totalAmount += $donation->person_amount;
                }
                

                return view('main_pages_files.disvocer-single', [
                    'single_cause' => $single_cause,
                    'all_people_donations' => $all_people_donations,
                    'all_collected_paymanets' => $collected_amount,
                    'campaign_reason' => $campaign_name, 
                    'amount_cause' => number_format($totalAmount, 2, '.')
                ]);
            } else {
                // If no cause is found, redirect to the causes list page
                return redirect()->route('frontEndCauses');
            }
        }




    // ------------------------------------------------------------------------------------------
    // ------------------------------------------------------------------------------------------
    // Below are dashboard routes and logic 

    public function singleCauseDashboard($id){


        if (Auth::user()->access_type !== 'admin') {
            return redirect('/dashboard');
        }

        $dashboard_single_case = DB::table('active_causes')
            ->where('id', $id)
            ->first();


        if (!$dashboard_single_case) {
            return redirect()->route('dashboard');
        } else {

            $videoStatus = $dashboard_single_case->video_status;
            $galleryStatus = $dashboard_single_case->gallery_status;


            $platformAmount = DB::table('platform_donations')
            ->where('id', 1)
            ->first();
            $availableAmount = $platformAmount->donation_amount ?? 0;

            $all_payouts = DB::table('payouts')
            ->where('payout_user_id', $id)
            ->orderBy('id', 'desc')
            ->get();

            
            $stripeDonations = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $balanceDonations = $stripeDonations->balance->retrieve();
            // $donationsAmount = (float) number_format($balanceDonations->available[0]->amount / 100, 2, '.')
            // - (float) $availableAmount;
            
            $donationsAmount = $balanceDonations->available[0]->amount / 100;


            $stripeSubs = new \Stripe\StripeClient(env('STRIPE_SECRET_SUBSCRIPTIONS'));
            $balance = $stripeSubs->balance->retrieve();
            $subsAmount = (float) number_format($balance->available[0]->amount / 100, 2, '.');

          

            return view('dashboard_files.cause-single', [
                'dashboard_single_case' => $dashboard_single_case, 
                'current_amount_donations' => $donationsAmount,
                'current_amount_subs' => $subsAmount, 
                'total_available_amount' =>number_format($balanceDonations->available[0]->amount / 100, 2, '.'),
                'current_amount_platform' => $availableAmount, 
                'all_payouts' => $all_payouts,
                'video_status' => $videoStatus, 
                'gallery_status' => $galleryStatus

            ]);
            
        }
    }

      public function allCauses() {

        if (Auth::user()->access_type !== 'admin') {
            return redirect('/dashboard');
        }

        $all_active_causes = DB::table('active_causes')
            ->orderBy('id', 'desc')
            ->get();

        $processeed = [];

        foreach ($all_active_causes as $cause) {
            
            if (
                !empty($cause->email) &&
                !empty($cause->cause_name) &&
                !empty($cause->cause_main_image) &&
                !empty($cause->cause_description) &&
                !empty($cause->cause_desired_amount) ) {
                $processeed[] = $cause;
            }
        }
        
        return view('dashboard_files.cause', ['all_active_causes' => $processeed]);
    }
    
    // public function causeDashboard(){

    //     $email =  Auth::user()->email;

    //     $campaign_user =  DB::table('active_causes')
    //         ->where('email', $email)
    //         ->first();

    //     if ($campaign_user) {

    //         return view('dashboard', ['campaign' => $campaign_user]);
    //     } else {

    //         return view('dashboard');
    //     }
    // }

   public function updateCause(Request $request) {
    $id = $request->hiddenID;
    $data = []; // Initialize an array to hold data to update
    $userType = Auth::user()->access_type;

    

    // Check and upload the main image if it exists
    if ($request->hasFile('mainImages')) {
        $mainImage = $request->file('mainImages');
        $imageName = time() . '_' . $mainImage->getClientOriginalName(); // Add timestamp
        $mainImage->move(public_path('assets_dashboard/images/main_images'), $imageName);

        $data['cause_main_image'] = $imageName; // Add to update data
    }

    // Check and upload the video if it exists
    if ($request->hasFile('videoUpload')) {
        $video = $request->file('videoUpload');
        $videoName = time() . '_' . $video->getClientOriginalName(); // Add a unique prefix
        $video->move(public_path('assets_dashboard/videos'), $videoName);

        $data['cause_video_update'] = $videoName; // Add to update data
    }

    // Check and upload gallery images if they exist
    if ($request->hasFile('gallery')) {
        $images = [];
        $uploadPath = public_path('/assets_dashboard/images/gallery_images');

        foreach ($request->file('gallery') as $file) {
            $name = time() . '_' . $file->getClientOriginalName(); // Add timestamp to make the name unique
            $file->move($uploadPath, $name);
            $images[] = $name; // Add the unique name to the array
        }

        // Combine all image names into a single string separated by '|'
        $imagesString = implode(' | ', $images);
        $data['cause_gallery'] = $imagesString; // Add to update data
    }

    $data['video_status'] = $request->has('causeVideoStatus') ? $request->causeVideoStatus : 'off';
    $data['gallery_status'] = $request->has('causeGalleryStatus') ? $request->causeGalleryStatus : 'off';

    // Update cause details
    $data['cause_name'] = $request->campaignName;
    $data['cause_desired_amount'] = $request->desiredResult;
    $data['cause_description'] = $request->campaignDescription;
    $data['cause_youtube_video'] = $request->youtubeInput;


    // Update the database
    DB::table('active_causes')
        ->where('id', $id)
        ->update($data);

    // Redirect based on user type
    if ($userType === "admin") {
        return redirect()->to("/dashboard/causes/$id")
            ->with('causeMsg', "Success");
    } else if ($userType === "campaign_owner") {
        return redirect()->route('dashboard')->with('causeMsg', "Success");
    }
}

    public function publishCause(Request $request)
    {

        $status = $request->causeStatus;
        $hiddenID = $request->hiddenID;

        // Retrieve the cause
        $cause = DB::table('active_causes')
            ->where('id', $hiddenID)
            ->first();

        if ($cause) {
            // Debug to ensure correct data retrieval
            // dd($cause);

            // Check each field explicitly
            if (
                is_null($cause->cause_name) || trim($cause->cause_name) === '' ||
                is_null($cause->cause_description) || trim($cause->cause_description) === '' ||
                is_null($cause->cause_main_image) || trim($cause->cause_main_image) === '' ||
                is_null($cause->cause_desired_amount) || trim($cause->cause_desired_amount) === ''
            ) {

                // Redirect with error message
                return redirect()->to("/dashboard/causes/$hiddenID")
                    ->with('errorPublish', 'Please fill out all required fields.');
            } else {
                // Update campaign status
                DB::table('active_causes')
                    ->where('id', $hiddenID)
                    ->update([
                        'campaign_status' => $status
                    ]);

                // Redirect with success message
                return redirect()->to("/dashboard/causes/$hiddenID")
                    ->with('successPublish', 'Campaign published successfully.');
            }
        }

        // Fallback if no cause found
        return redirect()->to("/dashboard/causes/$hiddenID")
            ->with('errorPublish', '');
    }

    public function stopCause(Request $request)
    {

        $hiddenID = $request->hiddenID;

        DB::table('active_causes')
            ->where('id', $hiddenID)
            ->update([
                'campaign_status' => 'not_active'
            ]);

        return redirect()->to("/dashboard/causes/$hiddenID")
            ->with('campaignStopped', 'Campaign stopped');
    }
}
