<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\ProjectTypeController;
use App\Http\Controllers\Admin\ServicesPageCotroller;
use App\Http\Controllers\Admin\ProjectImageController;
use App\Http\Controllers\Admin\ProjectSectionController;



Route::get('/av-admin', [AdminAuthController::class, 'show'])->name('admin.login');
Route::prefix('admin')->name('admin.')->group(function () {
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
    
    Route::middleware('isAdmin')->group(function () {
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])->name('dashboard');
    });

    Route::controller(ServicesPageCotroller::class)->middleware("isAdmin")->prefix("/services")->name("services.")->group(function(){
        Route::get("/","show")->name("show");
        Route::get("/create","create")->name("create");
        Route::post("/store","store")->name("store");
        Route::get("/edit/{service}","edit")->name("edit");
        Route::post("/update/{service}","update")->name("update");
    });

    Route::middleware("isAdmin")->resource("/project",ProjectController::class);
    Route::controller(ProjectImageController::class)->name("project.img.")->prefix("/project/img/{project}")->middleware("isAdmin")->group(function(){
        Route::get("/add-update","addUpdate")->name("addUpdate");
        Route::patch("/add-update","uploadImg")->name("uploadImg");
    });
    Route::middleware("isAdmin")->prefix("/project")->name("project")->resource("/type",ProjectTypeController::class);
    Route::middleware("isAdmin")->prefix("/project")->name("project")->resource("/section",ProjectSectionController::class);

});