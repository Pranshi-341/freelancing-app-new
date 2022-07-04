<?php

use Illuminate\Support\Facades\Route;
// add controller frontendController
use App\Http\Controllers\frontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return View('home');
});

//  add route for Services
Route::get('/help/technical',[frontendController::class,'Technical']);
Route::get('/help/mathematics',[frontendController::class,'Mathematics']);
Route::get('/help/physics',[frontendController::class,'Physics']);
Route::get('/help/dissertation',[frontendController::class,'Dissertation']);
Route::get('/help/coursework',[frontendController::class,'Coursework']);
Route::get('/help/presentations',[frontendController::class,'Presentations']);
Route::get('/help/computer-science',[frontendController::class,'ComputerScience']);
Route::get('/help/accounting-economics-business',[frontendController::class,'AccountingEconomicsBusiness']);

// add route for writing help
Route::get('/help/essay',[frontendController::class,'Essay']);
Route::get('/help/research-paper',[frontendController::class,'ResearchPaper']);
Route::get('/help/thesis',[frontendController::class,'Thesis']);
Route::get('/help/assigment',[frontendController::class,'Assigment']);
Route::get('/help/book-report',[frontendController::class,'BookReport']);
Route::get('/help/speach',[frontendController::class,'Speach']);
Route::get('/help/personal-statement',[frontendController::class,'PersonalStatement']);
Route::get('/help/lab-report',[frontendController::class,'LabReport']);
Route::get('/help/homework',[frontendController::class,'Homework']);
Route::get('/help/case-study',[frontendController::class,'CaseStudy']);
Route::get('/help/literature-review',[frontendController::class,'LiteratureReview']);



// add route for Team Members
Route::get('/support-team',[frontendController::class,'SupportTeam']);
Route::get('/professional-writers',[frontendController::class,'ProfessionalWriters']);
Route::get('/competent-tutors',[frontendController::class,'CompetentTutors']);
Route::get('/licensed-researchers',[frontendController::class,'LicensedResearchers']);

// add route
Route::get('/contactUs',[frontendController::class,'ContactUs']);