<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    /** Show the welecome page */
    public function home() {
        return view('welcome');
    }

    /** Show the treatmen page */
    public function treatment () {
        return view('main_pages_files.treatment');
    }


    /** Show the teaching page */
    public function teaching () {
        return view('main_pages_files.teaching');
    }

}
