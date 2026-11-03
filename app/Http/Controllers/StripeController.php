<?php

namespace App\Http\Controllers;

use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Customer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class StripeController extends Controller
{

    public function expressDonation(Request $request)
    {


        $data = $request->all();
        $email = $request->input('email');
        $name = $request->input('name');
        $amount = (float) $request->input('amount'); // This is the amount the user wants to pay

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        // Create a PaymentIntent with the user's info
        $paymentIntent = $stripe->paymentIntents->create([
            'amount' =>  (int) round($amount * 100),
            'currency' => 'eur',
            'receipt_email' => $email, // Send receipt to the real user email
            // 'payment_method_types' => ['card'],
            'automatic_payment_methods' => ['enabled' => true],

            'metadata' => [
                'customer_name' => $name,
                'customer_email' => $email,
            ],
        ]);

        // Return the clientSecret to the frontend
        return response()->json([
            'clientSecret' => $paymentIntent->client_secret,
            'data' => $data
        ]);
    }

    // public function firstDonation(Request $request){

    //     $percentage = (int) $request->percentage;
    //     $names = $request->names;
    //     $email = $request->email;
    //     $anonymousUser = $request->anonymousUser;

    //     $amount = number_format($request->amount * 1.95, 2, '.', '');
    //     $paymentMethod = $request->paymentMethodId1; // Retrieve PaymentMethod ID from the request
    //     $finalAmountCause = 0;
    //     $finalAmountDonation = 0;

    //     // return response()->json(['data'=>$amount]);

    //     // Initialize Stripe Client
    //     $stripeCause = new \Stripe\StripeClient(env('STRIPE_SECRET'));

    //     try {
    //         // Step 1: Create or retrieve a customer in Stripe
    //         $customer = $stripeCause->customers->create([
    //             'email' => $email, // Associate the customer with the provided email
    //         ]);

    //         // Step 2: Attach the PaymentMethod to the Customer
    //         $stripeCause->paymentMethods->attach(
    //             $paymentMethod, // Use the PaymentMethod ID sent from the frontend
    //             ['customer' => $customer->id]
    //         );

    //         // Step 3: Create the PaymentIntent for the cause
    //         $chargeCause = $stripeCause->paymentIntents->create([
    //             'amount' => $amount * 100, // Amount in cents
    //             'currency' => 'bgn', // Bulgarian Lev
    //             'customer' => $customer->id, // Attach the customer
    //             'payment_method' => $paymentMethod, // Use the attached PaymentMethod
    //             'off_session' => true, // Indicates the payment is processed without user interaction
    //             'confirm' => true, // Confirm the payment intent immediately
    //             'metadata' => [
    //                 'product_id' => 'prod_RThK3jNdS9Oprf', // Product ID for the cause
    //                 'name' => $names,
    //             ],
    //         ]);

    //         // If no donation percentage, return only the cause payment response
    //         return response()->json(
    //             [
    //                 'success' => true,
    //                 'data' => $chargeCause,
    //                 'percent' => $percentage,
    //                 'names' => $names,
    //                 'anonymousUser' => $anonymousUser,
    //                 'email' => $email
    //             ]
    //         );
    //     } catch (\Exception $e) {
    //         // Handle any errors that occur during the process
    //         return response()->json([
    //             'success' => false,
    //             'error' => $e->getMessage(),
    //         ], 400);
    //     }
    // }


    public function updateAmount(Request $request) {


        $id = (int) $request->hiddenID; // Hidden ID for updating the cause
        $paymentID1 = $request->paymentID1; // Payment ID 1 (Always present)
        // $paymentID2 = $request->paymentID2 ?? null; // Payment ID 2 (May be null)
        $percentage = $request->percentageUpdate;
        $person_name = $request->personName;
        $person_email = $request->personEmail;
        $person_anonymousUser = $request->anonymousUser;

        if ($person_anonymousUser === "true") {
            $person_name = 'Анонимен';
        }

        // Initialize the Stripe client with the secret key
        $stripeCause = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        try {
            // Retrieve the first payment details (this will always happen)
            $payment1 = $stripeCause->paymentIntents->retrieve(
                $paymentID1,
                ['expand' => ['latest_charge.balance_transaction']]
            );


            // Extract the net amount from the first payment (in cents)
            $net1 = $payment1->latest_charge->balance_transaction->net; // Net amount after taxes (in cents)

            // Retrieve the current amount collected for the cause
            $user = DB::table('active_causes')->where('id', $id)->first();
            $userCurrentAmount = (int) $user->cause_amount_collected;

            // Retrieve the current donation amount for the platform
            $donations = DB::table('platform_donations')->where('id', 1)->first();
            $donationAccount = (int) $donations->donation_amount;

            if ($percentage > 0) {
                // Calculate the amounts split based on percentage
                $platformAmount = ($net1 * $percentage) / 100; // Platform's share
                $causeAmount = $net1 - $platformAmount;       // Cause's share

                // Convert amounts to full amounts (from cents)
                $platformAmount = $platformAmount / 100;
                $causeAmount = $causeAmount / 100;

                // Update the platform donations amount
                DB::table('platform_donations')
                    ->where('id', 1)
                    ->update(['donation_amount' => $donationAccount + $platformAmount]);

                // Update the cause amount collected
                $finAmount = $userCurrentAmount + $causeAmount;

                // Populate the user in the database if payment is succesful
                DB::table('people_donations')
                    ->insert([
                        'person_name' => $person_name,
                        'person_email' =>  $person_email,
                        'paypent_provider' => 'stripe',
                        'person_amount' => number_format($causeAmount, 2, '.', ''),
                        'campaign_id' => $id,
                        'created_at' => now()
                    ]);
            } else {
                // No percentage: full amount goes to the cause
                $finAmount = $userCurrentAmount + ($net1 / 100);


                // Populate the user in the database if payment is succesful
                DB::table('people_donations')
                    ->insert([
                        'person_name' => $person_name,
                        'person_email' =>  $person_email,
                        'paypent_provider' => 'stripe',
                        'person_amount' => number_format($net1 / 100, 2, '.', ''),
                        'campaign_id' => $id,
                        'created_at' => now()
                    ]);
            }

            // Update the cause's database with the new total amount
            DB::table('active_causes')
                ->where('id', $id)
                ->update(['cause_amount_collected' => $finAmount]);

            // Return the updated amount as a JSON response
            return response()->json(['updatedAmount' => $finAmount]);
        } catch (\Exception $e) {
            // Handle any errors that occur during the process
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function home(Request $request)
    {

        $transactions = DB::table('metrics')
            ->where('id', 1)
            ->first();

        return view('welcome', [
            // 'all_transactions' => $transactions->all_transactions,
            // 'total_amount' => $transactions->total_amount,
            // 'toal_active_subscriptions' => $transactions->total_active_subscriptions
        ]);
    }

    public function updateMetrics()
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $stripeSubscriptions = new \Stripe\StripeClient(env('STRIPE_SECRET_SUBSCRIPTIONS'));

        $activeSubscriptions = $stripeSubscriptions->subscriptions->all([
            'status' => 'active',
        ]);

        $totalAmount = 0;
        $allFetchedTransactions = [];

        // First batch
        $allTransactions = $stripe->charges->all([
            'limit' => 50
        ]);

        // Add first batch to the total
        foreach ($allTransactions->data as $transaction) {
            if ($transaction->status === 'succeeded') {
                $totalAmount += (float) $transaction->amount;
            }
            $allFetchedTransactions[] = $transaction;
        }

        // Use your lastID logic
        $lastID = $allTransactions->data[49]->id;

        // Keep paginating if there's more
        while ($allTransactions->has_more === true) {
            $allTransactions = $stripe->charges->all([
                'limit' => 50,
                'starting_after' => $lastID
            ]);

            foreach ($allTransactions->data as $transaction) {
                if ($transaction->status === 'succeeded') {
                    $totalAmount += (float) $transaction->amount;
                }
                $allFetchedTransactions[] = $transaction;
            }

            // Update lastID for next page
            $lastID = end($allTransactions->data)->id ?? null;
        }

        DB::table('metrics')
            ->where('id', 1)
            ->update([
                'all_transactions' => count($allFetchedTransactions),
                'total_amount' => number_format(($totalAmount / 100) / 1.95, 2, '.'),
                'total_active_subscriptions' => count($activeSubscriptions)
            ]);
    }
}
