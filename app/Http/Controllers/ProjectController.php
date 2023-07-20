<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Page
    function page(Request $request){
        // return view('pages.projects');
    }

    // Projects Data
    function projectsData(Request $request){
        return DB::table('projects')->get();
    }
}
