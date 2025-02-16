<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\VaccinationController;
use Illuminate\Support\Facades\Route;


// Frontend Controller with Grouping 
Route::controller(HomeController::class)->group(function () {
    Route::get('/', "Home");
    Route::get('prevention', "Prevention");
    Route::get('symptoms', "Symptoms");
    Route::get('about', "About");
    Route::get('blog', "Blog");
    Route::get('contact', "Contact");
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [AdminController::class, "Home"])->name('dashboard');
});

Route::resource('/dashboard/hospital', HospitalController::class)->middleware('auth');
Route::resource('/dashboard/vaccination', VaccinationController::class)->middleware('auth');



