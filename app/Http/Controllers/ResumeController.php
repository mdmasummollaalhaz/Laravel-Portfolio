<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    // Page
    function page(Request $request){
        $seo =DB::table('seoproperties')->where('pageName', '=', 'resume')->first();
        return view('pages.resume', ['seo'=>$seo]);
    }

    // ResumeLink Data
    function resumeLink(Request $request){
        return DB::table('resumes')->first();
    }

    // Experiences Data
    function experiencesData(Request $request){
        return DB::table('experiences')->get();
    }

    // Educations Data
    function educationsData(Request $request){
        return DB::table('educations')->get();
    }

    // Skills Data
    function skillsData(Request $request){
        return DB::table('skills')->get();
    }

    // Languages Data
    function languagesData(Request $request){
        return DB::table('languages')->get();
    }

}
