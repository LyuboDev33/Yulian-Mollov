<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use App\Models\User;
use Stripe\StripeClient;
use Illuminate\Support\Env;
use Illuminate\Http\Request;
use Laravel\Cashier\Cashier;
use Laravel\Cashier\Billable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller {

   

    public function cancelSubscription(Request $request) {
    $user = Auth::user();
    
    $sub_id = DB::table('subscriptions')
        ->where('user_id', $user->id)
        ->where('stripe_status', 'active') // Ensure you are looking for active subscriptions
        ->pluck('stripe_id')
        ->first();

    if (!$sub_id) {
        return redirect()->route('subscription_page')->with('error_noSubscription', 'No active subscription found.');
    }

    try {
        Stripe::setApiKey(env('STRIPE_SECRET_SUBSCRIPTIONS'));
        $stripe = new StripeClient(env('STRIPE_SECRET_SUBSCRIPTIONS'));

        $subscription = $stripe->subscriptions->update($sub_id, [
            'cancel_at_period_end' => true,
        ]);

        return redirect()->route('subscription_page')->with('success_cancelation', 'Subscription cancelled.');

    } catch (\Exception $e) {
        // Handle any errors that may occur during the process
        return redirect()->route('subscription_page')->with('error', 'An error occurred while updating the subscription.');
    }
}
    

public function index(Request $request)
{
    $access_type = Auth::user()->access_type;

    if($access_type === "user") { 
        return view('dashboard_files.subscription');
    } else  { 
        return redirect('/dashboard');
    }

}


    
    public function subscriptionCheckout(Request $request, $plan) {

        // Check if the user is logged in
        if (!Auth::user()) { 
            return redirect()->route('register', ['plan' => $plan])
                ->with('need__registration', 'You need to register');

        } else if(Auth::user()) { 

            $user = DB::table('subscriptions')
            ->where('user_id', Auth::user()->id)
            ->first(); 

            if($user) { 

                $sub_id = $user->stripe_id;

                Stripe::setApiKey(env('STRIPE_SECRET_SUBSCRIPTIONS'));

                $stripe = new StripeClient(env('STRIPE_SECRET_SUBSCRIPTIONS'));

                $subscription = $stripe->subscriptions->retrieve($sub_id);
            
                if ($subscription->status === "active") {

                    return redirect()->route('pricing')->with('failed', 'You are already subscribed.');

                } else if ($subscription->status === "canceled") { 
                    return $request->user()
                    ->newSubscription('basic_plan', $plan)
                    ->checkout([
                    'locale' => 'bg',
                    'success_url' => route('success'),
                    'cancel_url' => route('fail-payment'),
        
                    ]);
                }

            } else { 
                return $request->user()
                ->newSubscription('basic_plan', $plan)
                ->checkout([
                    'locale' => 'bg',
                    'success_url' => route('success'),
                    'cancel_url' => route('fail-payment'),
                ]);
            }
        }
    }
    

    
   

}