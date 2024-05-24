<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenralController;

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


Route::controller(GenralController::class)->group(function(){
    Route::get('/', 'home')->name("home");
    
    // about routes 
    Route::get("/about-us","about")->name("about");
    Route::get("/about-us/keypersons","keypersons")->name("about.keypersons");
    Route::get("/about-us/quality-policy","qualityPolicy")->name("about.qualityPolicy");

    // services route
    Route::get("/our-services",'services')->name("services");

    // contact routes
    Route::get("/contact",'contact')->name("contact");

    // Projects routes

    Route::get("/projects/ongoing-projects",'ongoingProjects')->name("project.ongoing");
    Route::get("/projects/commissioned-projects",'commissionedPrjects')->name("project.commissioned");

    // contact routes

    Route::get("/contact-us","contactus")->name("contactus");

});


