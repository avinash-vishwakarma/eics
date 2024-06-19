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


Route::controller(GenralController::class)->middleware("shareHeaderData")->group(function(){
    Route::get('/', 'home')->name("home");
    
    // about routes 
    Route::get("/about-us","about")->name("about");
    Route::get("/about-us/keypersons","keypersons")->name("about.keypersons");
    Route::get("/about-us/quality-policy","qualityPolicy")->name("about.qualityPolicy");

    // services route
    Route::get("/our-services",'services')->name("services");
    Route::get("/service/{service}","service")->name("service");

    // contact routes
    Route::get("/contact",'contact')->name("contact");

    // Projects routes

    Route::get("/projects/{type}","projects")->name("projects");
    Route::get("/project/{slug}","project")->name("project");


    // contact routes

    Route::get("/contact-us","contactus")->name("contactus");
    Route::post("/contact-us","SendMessage")->name("contact.sendMessage");

});


