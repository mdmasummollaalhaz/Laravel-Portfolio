<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Ajax Call Routes
Route::get('/heroData', [HomeController::class, 'heroData']);
Route::get('/aboutData', [HomeController::class, 'aboutData']);
Route::get('/socialData', [HomeController::class, 'socialData']);
Route::get('/projectsData', [ProjectController::class, 'projectsData']);
Route::get('/resumeLink', [ResumeController::class, 'resumeLink']);
Route::get('/experiencesData', [ResumeController::class, 'experiencesData']);
Route::get('/educationsData', [ResumeController::class, 'educationsData']);
Route::get('/skillsData', [ResumeController::class, 'skillsData']);
Route::get('/languagesData', [ResumeController::class, 'languagesData']);
Route::get('/contactRequest', [ContactController::class, 'contactRequest']);
