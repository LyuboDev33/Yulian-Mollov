<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\StripeClient;

class PayoutsController extends Controller {

    // -------------------------------------------------------------
    // --------------------------Below are the Get Requests---------
    public function causePage () {  
        
        if (Auth::user()->access_type !== 'admin') {
            return redirect('/dashboard');
        }

        return view('dashboard_files.payouts.payouts-cause');
    }

    public function donationPage () {   
        return view('');

    }
    public function monthlySubPage () {   
        return view('');

    }

    // -------------------------------------------------------------
    // --------------------------Below are the Post Requests---------


    public function payoutCreate(Request $request)
{

    

    $id = $request->hiddenID;
    $payout_amount = $request->payoutAmount;
    $payout_reason = $request->payoutReason;
    $payout_account = $request->payoutAccount;
    $payout_file = null;
    $payout_admin = Auth::user()->name;

    // Handle file upload validation
    // if ($request->hasFile('payoutFile')) {
    //     $mainImage = $request->file('payoutFile');
    //     $imageName = time() . '_' . $mainImage->getClientOriginalName(); // Add timestamp
    //     $mainImage->move(public_path('assets_dashboard/images/payout_files'), $imageName);
    //     $payout_file = $imageName; // Save the uploaded file name
    // }

    $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
    $stripeSubscriptions = new \Stripe\StripeClient(env('STRIPE_SECRET_SUBSCRIPTIONS'));

    // Handle payouts based on payout account
    switch ($payout_account) {
        // case "PlatformMoney":

        //     // Retrieve the platform donations balance
        //     $platformAmount = DB::table('platform_donations')
        //         ->where('id', 1)
        //         ->first();
        //     $availableAmount = $platformAmount->donation_amount ?? 0;

        //     // Check if there are sufficient funds in the platform donations account
        //     if ($payout_amount > $availableAmount) {
        //         return redirect()->to("/dashboard/causes/$id")
        //             ->with(['insufficient_amount' => 'Няма достатъчно наличност в момента']);
        //     }

        //     // Deduct the payout amount from the platform donations balance
        //     $newAmount = (float)$availableAmount - (float)$payout_amount;
        //     DB::table('platform_donations')
        //         ->where('id', 1)
        //         ->update(['donation_amount' => $newAmount]);

        //     // Retrieve the Stripe balance
        //     $balance = $stripe->balance->retrieve();
        //     $availableBalance = $balance->available[0]->amount; // Assuming primary currency

        //     // Convert payout amount to cents for Stripe and validate against available balance
        //     $payoutInCents = (int)($payout_amount * 100);
        //     if ($payoutInCents > $availableBalance) {
        //         return redirect()->to("/dashboard/causes/$id")
        //             ->with(['insufficient_amount' => 'Няма достатъчно наличност в момента']);
        //     }

        //     // Create the payout in Stripe
        //     $stripe->payouts->create([
        //         'amount' => $payoutInCents,
        //         'description' => $payout_reason,
        //         'currency' => 'bgn',
        //     ]);
        //     break;

        case "Dr. Yulian Mollov":
            // Retrieve the Stripe balance

            $balance = $stripe->balance->retrieve();
            $availableBalance = $balance->available[0]->amount; // Assuming primary currency

            // Convert payout amount to cents for Stripe and validate against available balance
            $payoutInCents = (int)($payout_amount * 100);
            if ($payoutInCents > $availableBalance) {
                return redirect()->to("/dashboard/causes/$id")
                    ->with(['insufficient_amount' => 'Няма достатъчно наличност в момента']);
            }

            // Create the payout in Stripe
            $stripe->payouts->create([
                'amount' => $payoutInCents,
                'description' => $payout_reason,
                'currency' => 'bgn',
            ]);
            break;

        case "Dr. Mollov Platform":

            // Retrieve the Stripe subscriptions balance
            $balance = $stripeSubscriptions->balance->retrieve();
            $availableBalance = $balance->available[0]->amount; // Assuming primary currency

            // Convert payout amount to cents for Stripe and validate against available balance
            $payoutInCents = (int)($payout_amount * 100);
            if ($payoutInCents > $availableBalance) {
                return redirect()->to("/dashboard/causes/$id")
                    ->with(['insufficient_amount' => 'Няма достатъчно наличност в момента']);
            }

            // Create the payout in Stripe
            $stripeSubscriptions->payouts->create([
                'amount' => $payoutInCents,
                'description' => $payout_reason,
                'currency' => 'bgn',
            ]);
            break;

        default:
            return redirect()->to("/dashboard/causes/$id")
                ->with(['insufficient_amount' => 'Невалидна сметка за плащане']);
    }



    // Insert the payout information into the database
    DB::table('payouts')
        ->insert([
            'payout_user_id' => $id,
            'payout_amount' => $payout_amount,
            'payout_reason' => $payout_reason,
            'payout_account' => $payout_account,
            'payout_file' => $payout_file,
            'payout_admin' => $payout_admin,
            'created_at' => now()
        ]);

    // Redirect with a success message
    return redirect()->to("/dashboard/causes/$id")
        ->with(['payoutSuccess' => 'Payout-а беше създаден успешно']);
}





}
