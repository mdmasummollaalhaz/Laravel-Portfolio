<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // Page
    function page(Request $request){
        $seo =DB::table('seoproperties')->where('pageName', '=', 'home')->first();
        return view('pages.home', ['seo'=>$seo]);
    }

    // Hero Data
    function heroData(Request $request){
        return DB::table('heroproperties')->first();
    }

    // About Data
    function aboutData(Request $request){
        return DB::table('abouts')->first();
    }

    //Socials Data
    function socialData(Request $request){
        return DB::table('socials')->first();
    }
}
