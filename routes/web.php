<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
Route::get('/', function () {
    $jobs = Job::all();
//    dd($jobs);
    return view('home');
});

Route::get('/jobs', function (){
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function($id){
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});


Route::get('/about', function (){
    return view('about');
});
