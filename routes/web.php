<?php
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->paginate(10);
    return view('jobs.index', [
        'jobs'=> $jobs
    ]);
});

Route::post('/jobs', function(){
//    dd(request()->all());
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);
    return redirect('/jobs');
});

Route::get('/jobs/create', function(){
    return view('jobs.create');
});

// SHOW
Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show', ['job' => $job]);
});

// EDIT
Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', ['job' => $job]);
});

// UPDATE
Route::patch('/jobs/{job}', function(Job $job){
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    $job-> update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);
    return redirect('/jobs/' . $job->id);
});

// DELETE
Route::delete('/jobs/{job}', function(Job $job){
    $job->delete();
    return redirect('/jobs');
});

Route::get('/about', function () {
    return view('about');
});
