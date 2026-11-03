<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsletterController extends Controller
{

    public function subscribeUser(Request $request)
{
    $exists = DB::table('newsletters')
    ->where('newslettet_email', $request->email_input)
    ->exists();

    if ($exists) {
        // Return an error response if the email exists
        return response()->json(['status' => 'failExists']);
    }

    try {
        // Insert the email into the database
        DB::table('newsletters')->insert([
            'newslettet_email' => $request->email_input,
        ]);

        // Return a JSON response on success
        return response()->json(['status' => 'successSub']);
    } catch (\Exception $e) {
        // Handle errors and return a failure response
        return response()->json(['status' => 'fail', 'message' => 'Грешка при абониране. Моля, опитайте отново.'], 500);
    }
}



}
