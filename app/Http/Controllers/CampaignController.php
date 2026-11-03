<?php

namespace App\Http\Controllers;

use App\Mail\CampaignApproved;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;


class CampaignController extends Controller
{


    public function dashCampaign()
    {
        // Check if the user is not an admin
        if (Auth::user()->access_type !== 'admin') {
            return redirect('/dashboard');
        }
    
        $campaigns = DB::table('campaigns')
        ->orderBy('id', 'desc')
        ->get();
        return view('dashboard_files.campaign', ['campaigns' => $campaigns]);
    }
    
    public function dashSingleCampaing($id)
    {
        // Check if the user is not an admin
        if (Auth::user()->access_type !== 'admin') {
            return redirect('/dashboard');
        }
    
        $single_campaign = DB::table('campaigns')
        ->where('id', $id)
        ->first();
    
        if ($single_campaign) {
            return view('dashboard_files.campaign-single', ['single_campaign' => $single_campaign]);
        } else {
            return redirect('/dashboard');
        }
    }

    public function changeStatus(Request $request)
    {
        $id = $request->hiddenID;
        $status = $request->status;
        $accessType = $request->access_type;
        $name = $request->name;
        $email = $request->email;
        $password = bin2hex(random_bytes(4));
        // $password = "123456789";

        DB::table('campaigns')
            ->where('id', $id)
            ->update(['status' => $status]);

        // If status is approved, we create an account for the user
        if ($status === "approved") {

            $user_exists = DB::table('users')
                ->where('email', $email)
                ->first();

            if ($user_exists) {
                return redirect("/dashboard/campaigns/{$id}")
                    ->with('duplicate', 'Account already exists');
            } else {
                

                $user = User::create([
                    'name' => $name,
                    'email' => $email,
                    'access_type' => $accessType,
                    'password' => Hash::make($password),
                ]);

                DB::table('active_causes')
                    ->insert([
                    'email' => $email
                ]);
                
                Mail::to($email)->send(new CampaignApproved($email, $password));
            }
        }
        return redirect("/dashboard/campaigns/{$id}")
            ->with('message', 'Status updated successfully!');
    }



    public function insert_campaign(Request $request) {
    $validatedData = $request->validate([
        'email_campaing' => 'required|unique:campaigns,email|max:255',
    ]);

    // Prepare data for insertion without validating other fields
    $data = [
        'name' => $request->name,
        'email' => $validatedData['email_campaing'], // Email is validated
        'telephone' => $request->telephone,
        'treatment' => $request->treatment,
        'description' => $request->description_campaign, // Optional field
    ];

    // Handle file upload if present
    if ($request->hasFile('campaignFile')) {
        $files = $request->file('campaignFile');
        $fileNames = [];

        foreach ($files as $file) {
            // Generate unique file name using the original name and timestamp
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Move the file to the desired folder
            $file->move(public_path('/assets_dashboard/files'), $fileName);

            // Add the file name to the array
            $fileNames[] = $fileName;
        }

        // Convert file names array into a string separated by ' | '
        $data['file_name'] = implode(' | ', $fileNames);
    } else {
        return redirect()
            ->route('campaign')
            ->with('no_file_uploaded', 'Не сте прикачили файл. Моля попълнете формата отново.');
    }

    // Insert data into the database
    DB::table('campaigns')->insert($data);

    // Redirect with success message
    return redirect()
        ->route('campaign')
        ->with('campaign_success', 'Вие кандидатствахте успешно.');
    }   

}
