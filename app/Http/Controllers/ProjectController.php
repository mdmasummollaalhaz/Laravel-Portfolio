<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    // Page
    function page(Request $request){
        return view('pages.projects');
    }

    // Projects Data
    function projectsData(Request $request){
        return DB::table('projects')->get();
    }
}
