<?php
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

// Home page
Route::view('/', 'home');

// Jobs controller
Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::post('/jobs', 'store');
    Route::get('/jobs/create', 'create');
    Route::get('/jobs/{job}', 'show');
    Route::get('/jobs/{job}/edit', 'edit');
    Route::patch('/jobs/{job}', 'update');
    Route::delete('/jobs/{job}', 'destroy');
});

// About page
Route::view('/about', 'about');
