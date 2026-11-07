<?php

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\CausesController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DiscoverCauseController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PayoutsController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StripeController;
use App\Models\ActiveCauses;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;





 // ---------------------Email Controller-----------------------------------------------------------------
 Route::get('/mail', [MailController::class, 'contactForm']);
 Route::post('/mail/contact-form', [MailController::class, 'sendEmail'])->name('sendEmail');
 // ---------------------Email Controller-----------------------------------------------------------------

 Route::get('/', [FrontEndController::class, 'home'] )->name('home');
 Route::get('/treatment',  [FrontEndController::class, 'treatment'])->name('treatment');
 Route::get('/obucheniya', [FrontEndController::class, 'teaching'])->name('teaching');

//  Route::get('/charge', function () {return view('main_pages_files.charge');});

// Route::get('/dashboard', [ProfileController::class, 'checkSubscription'])->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/auth/google', [GoogleAuthController::class, 'redirect'])->name('google_auth');
// Route::get('/auth/google/callback', [GoogleAuthController::class, 'callbackGoogle']);

// -----------------------------------------------------------------------------------------------
// --------------------------All Front End Pages--------------------------------------------------

Route::get('/change-language/{lang}', function ($lang) {
    // Optionally validate allowed langs
    if (!in_array($lang, ['en', 'bg', 'tr'])) {
        abort(400); // or default to 'bg'
    }
    Session::put('locale', $lang);
    return redirect()->back();
})->name('change-language');

Route::middleware('translation')->group(function () {

    Route::fallback(function () { return view('404'); });

    // Route::get('/', [StripeController::class, 'home'] )->name('welcome__page');
    // Route::get('/support', function () { return view('main_pages_files.support');})->name('support');
    Route::get('/contact', function () { return view('main_pages_files.contact');})->name('contact');
    Route::get('/obshti-usloviq', function () { return view('main_pages_files.privacy-conditions.conditions'); });
    Route::get('/about', function(){ return view('main_pages_files.about'); });
    Route::get('/success', function () { return view('main_pages_files.success');})->name('success');
    Route::get('/fail-payment', function () { return view('main_pages_files.fail-payment');})->name('fail-payment');
    // Route::get('/campaign', function () {  return view('main_pages_files.campaign');})->name('campaign');
    Route::get('/news', function () { return view('main_pages_files.news'); });

    // -----------------------------------------------------------------------------------------------
    // ------------------All Stripe Logic Front End (Single payment and Subscriptions)----------------
    // Route::get('/discover',         [CausesController::class, 'getCauses'])->name('frontEndCauses');
    // Route::get('/discover/{cause}', [CausesController::class, 'singleCause']);
    // Route::get('/discover/all-donations/{id}', [CausesController::class, 'allDonations']);

    Route::get('/checkout/{plan?}', [CheckoutController::class, 'subscriptionCheckout'])->name('checkout');
    Route::post('/checkout-platform-donation', [StripeController::class, 'firstDonation'])->name('makeDonation');
    Route::post('/checkout-express-donation', [StripeController::class, 'expressDonation'])->name('expressDonation');

    Route::post('/update-amount',   [StripeController::class, 'updateAmount']);

    Route::post('/campaign/insert', [CampaignController::class, 'insert_campaign'])->name('insert_campaign');

    // -----------------------------------------------------------------------------------------------
    // ------------------All Paypal Logic for a single payment ---------------------------------------
    // Route::post('pay', [PaypalController::class, 'paypalPayment'])->name('paypalPayment');
    Route::get('success', [PaypalController::class, 'success']);
    Route::get('error', [PaypalController::class, 'error']);


});



// Events
// Route::get('/events', [EventsController::class,'indexEvents']);
// Route::post('/events/purchase', [EventsController::class,'purchaseTicket'])->name('purchaseTicket');


// -----------------------------------------------------------------------------------------------
// ------------------All Newsletter Logic----------------
Route::post('/newsletter_subscribe', [NewsletterController::class, 'subscribeUser']);


Route::get('/dashboard', [ProfileController::class, 'checkSubscription'])
->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // -----------------------------------------------------------------------------------------------
    // --------------------------All Profile Logic-----------------------------------------------------
    Route::get('/profile',    [ProfileController::class, 'get_profile'])->name('profile.profile');
    Route::patch('/profile',  [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // -----------------------------------------------------------------------------------------------
    // --------------------------All Payout Logic-----------------------------------------------------
    Route::get('/dashboard/payout/cause-page',   [PayoutsController::class, 'causePage']);
    Route::get('/dashboard/payout/donation-page',[PayoutsController::class, 'donationPage']);
    Route::get('/dashboard/payout/monthly-sub',  [PayoutsController::class, 'monthlySubPage']);
    Route::post('/dashboard/payout/create',      [PayoutsController::class, 'payoutCreate'])->name('payoutCreate');


    // -----------------------------------------------------------------------------------------------
    // --------------------------All Campaign Logic-----------------------------------------------------
    Route::get('/dashboard/campaigns',         [CampaignController::class, 'dashCampaign'])->name('dashCampaign');
    Route::get('/dashboard/campaigns/{id}',    [CampaignController::class, 'dashSingleCampaing'])->name('dashSingle');
    Route::post('/dashboard/campaigns/status', [CampaignController::class, 'changeStatus'])->name('changeStatus');

    // -----------------------------------------------------------------------------------------------
    // --------------------------All Causes Logic-----------------------------------------------------
    Route::get('/dashboard/cause',       [CausesController::class, 'allCauses']);
    Route::get('/dashboard/causes/{id}', [CausesController::class, 'singleCauseDashboard'])->name('singleDashboardCause');
    Route::post('/update-cause',         [CausesController::class, 'updateCause'])->name('updateCause');
    Route::post('/publish-cause',        [CausesController::class, 'publishCause'])->name('publishCause');
    Route::post('/stop-cause',           [CausesController::class, 'stopCause'])->name('stopCause');

    // -----------------------------------------------------------------------------------------------
    // --------------------------Stripe Subscription Logic-----------------------------------------------------
    Route::get('/account/subscriptions',         [CheckoutController::class, 'index'])->name('subscription_page');
    Route::post('/account/subscriptions/cancel', [CheckoutController::class, 'cancelSubscription'])->name('cancel__subscription');

});

require __DIR__.'/auth.php';
