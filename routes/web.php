<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HospitalController;
use Illuminate\Support\Facades\Route;

// Frontend Controller
Route::get('/',[HomeController::class, "Home"]);
Route::get('prevention',[HomeController::class, "Prevention"]);
Route::get('symptoms',[HomeController::class, "Symptoms"]);
Route::get('about',[HomeController::class, "About"]);
Route::get('blog',[HomeController::class, "Blog"]);
Route::get('contact',[HomeController::class, "Contact"]);


// Backend Controller
// Route::get('/',[AdminController::class, "Home"]);


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [AdminController::class, "Home"])->name('dashboard');
});

// Route::get('/dashboard/allhospital',  [hospitalController::class, 'index']);
// Route::get('/dashboard/addhospital', [hospitalController::class,'create']);
Route::resource('/dashboard/hospital', HospitalController::class);

