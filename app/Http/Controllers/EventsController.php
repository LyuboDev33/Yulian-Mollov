<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller {
    public function purchaseTicket(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'telephone' => 'required',
            'userTicket' => 'required'
        ]);
    
        DB::table('events')->insert([
            'name' => $request->name,
            'telephone' => $request->telephone,
            'ticket_price' => $request->userTicket
        ]);
    
        return back()->with('purchaseSuccess', true);
    }

    public function indexEvents () { 
        

            return view('main_pages_files.events');
    }



}
