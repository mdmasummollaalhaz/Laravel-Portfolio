<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Pages Routes
Route::get('/', [HomeController::class, 'page']);
Route::get('/contact', [ContactController::class, 'page']);
Route::get('/projects', [ProjectController::class, 'page']);
Route::get('/resume', [ResumeController::class, 'page']);



// Ajax Call Routes
Route::get('/heroData', [HomeController::class, 'heroData']);
Route::get('/aboutData', [HomeController::class, 'aboutData']);
Route::get('/socialData', [HomeController::class, 'socialData']);
Route::get('/projectsData', [HomeController::class, 'projectsData']);
Route::get('/resumeLink', [HomeController::class, 'resumeLink']);
Route::get('/experiencesData', [HomeController::class, 'experiencesData']);
Route::get('/educationData', [HomeController::class, 'educationData']);
Route::get('/skillsData', [HomeController::class, 'skillsData']);
Route::get('/languagesData', [HomeController::class, 'languagesData']);
Route::get('/contactRequest', [HomeController::class, 'contactRequest']);
