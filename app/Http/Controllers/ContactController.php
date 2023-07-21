<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    // Page
    function page(Request $request){
        return view('pages.contact');
    }

    // Contact Request
    function contactRequest(Request $request){
        // sleep(5);
        return DB::table('contacts')->insert($request->input());
    }
}
