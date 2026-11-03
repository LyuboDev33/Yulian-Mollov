<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use Stripe\StripeClient;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\ActiveCauses;

class ProfileController extends Controller {

    public function checkSubscription() {
        $accesType = Auth::user()->access_type;

        switch ($accesType) {
            case 'user':
             
                $user = Auth::user();

                $subscription = DB::table('subscriptions')
                ->where('user_id', $user->id)
                ->latest('created_at') 
                ->first(); 


                if ($subscription) {
                    $stripe = new StripeClient(env('STRIPE_SECRET_SUBSCRIPTIONS'));
                    $stripeSubscription = $stripe->subscriptions->retrieve($subscription->stripe_id);
                    $status = $stripeSubscription->status ? $stripeSubscription->status : null;

                    return view('dashboard', ['status_stripe' => $status]);
                } else { 
                    return view('dashboard');
                }

                break;
            
            case 'campaign_owner': 

                $email =  Auth::user()->email;
                $campaign_user =  DB::table('active_causes')
                    ->where('email', $email)
                    ->first();

                $cause = DB::table('active_causes')
                ->orderBy('id', 'desc')
                ->where('email', $email)
                ->first();
        
                $processed = 'cause_not_filled';
        
                if (!empty($cause->cause_name) &&
                    !empty($cause->cause_main_image) &&
                    !empty($cause->cause_description) &&
                    !empty($cause->cause_desired_amount)) {
                    $processed = 'cause_filled';
                
                }

                if ($campaign_user) {

                    return view('dashboard', [
                        'campaign' => $campaign_user,
                        'filled_status' => $processed
                    ]);

                } else {

                    return view('dashboard');
                }

                break;

             case 'admin': 
                
                $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
                $stripeSubscriptions = new \Stripe\StripeClient(env('STRIPE_SECRET_SUBSCRIPTIONS'));
                
                $all_tickets = DB::table('events')
                ->orderBy('id', 'desc')
                ->get();

                $totalDonations = DB::table('platform_donations')
                ->where('id', 1)
                ->pluck('donation_amount')
                ->first();
    
                $sum = $stripe->balance->retrieve();
                $availableAmount =  (float) number_format($sum->available[0]->amount / 100, 2, '.');

                $currentAvailableAmount = $availableAmount - (float) number_format($totalDonations, 2, '.');
    
                $subscriptionAmount = $stripeSubscriptions->balance->retrieve();
                $amountSubscriptions =  (float) number_format($subscriptionAmount->available[0]->amount / 100, 2, '.');
    
                $allTransactions = $stripe->paymentIntents->all();    
    
                $activeSubscriptions = $stripeSubscriptions->subscriptions->all([
                    'status' => 'active',
                ]);
    
                
         
                return view('dashboard', [
                    'all_tickets' => $all_tickets,
                    'all_transactions' => count($allTransactions),
                    'total_amount_donations' => number_format($availableAmount, 2, '.'),
                    'total_amount_subscriptions' => number_format($amountSubscriptions, 2, '.'),
                    'toal_active_subscriptions' => count($activeSubscriptions),
                    'amount_available' => number_format($currentAvailableAmount, 2, '.'),
                    'available_amount_donations' =>  number_format($totalDonations , 2, '.', '')
                ]);

                break;
            
        }
        
            
         
        
    }

    // This method (get_profile) returns both the user and the payment plan status
    public function get_profile(Request $request): View {
        $user = Auth::user();
        $subscription = DB::table('subscriptions')
            ->where('user_id', $user->id)
            ->first(); 

        if ($subscription) {
            Stripe::setApiKey(env('STRIPE_SECRET_SUBSCRIPTIONS'));
            $stripe = new StripeClient(env('STRIPE_SECRET_SUBSCRIPTIONS'));

            $stripeSubscription = $stripe->subscriptions->retrieve($subscription->stripe_id);

            Carbon::setlocale('bg');
            $startDate = Carbon::createFromTimestamp($stripeSubscription->current_period_start)->translatedFormat('j F Y');
            $nextChargeDate = Carbon::createFromTimestamp($stripeSubscription->current_period_end)->translatedFormat('j F Y');
            $status = $stripeSubscription->status;
            $months = $stripeSubscription->plan->interval_count;
                    
            return view('dashboard_files.profile', [
                'user' => $request->user(),
                'information_account' => [$startDate, $nextChargeDate, $status, $months]
            ]);

        } else { 
            return view('dashboard_files.profile', [
                'user' => $request->user(),
            ]);
        }
    }

    /**
     * Dashboard-specific methods for causes
     */



        public function destroy(Request $request): RedirectResponse
        {
            $user = $request->user();
        
            // Retrieve the latest subscription for the user
            $subscription = DB::table('subscriptions')
                ->where('user_id', $user->id)
                ->latest('created_at')
                ->first();
        
            // Initialize Stripe Client
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET_SUBSCRIPTIONS'));
        
            if ($subscription && $subscription->stripe_id) {
                // Retrieve the subscription from Stripe
                $stripeSubscription = $stripe->subscriptions->retrieve($subscription->stripe_id);
        
                // Check subscription status and cancel if necessary
                if ($stripeSubscription->status !== 'canceled') {
                    $stripe->subscriptions->cancel($subscription->stripe_id, []);
                }
            }
        
            // Log out the user
            Auth::logout();
        
            // Delete the user's account
            $user->delete();
        
            // Invalidate and regenerate session tokens
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        
            // Redirect to the home page
            return Redirect::to('/');
        }

        public function update(ProfileUpdateRequest $request): RedirectResponse {
            $userEmail = Auth::user()->email;
            $emailInput = $request->email;
    
            $active_user_cause = DB::table('active_causes')
            ->where('email', $userEmail)
            ->first();
    
            if($active_user_cause) { 
                DB::table('active_causes')
                ->where('email', $active_user_cause->email)
                ->update([
                    'email' => $emailInput
                ]);
            }
    
            $request->user()->fill($request->validated());
            $request->user()->save();
    
    
            return Redirect::route('profile.profile')->with('status', 'profile-updated');
        }
        
}
