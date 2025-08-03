<?php

use App\Models\Employer;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    // $jobs = Job::all();
    // dd($jobs);
    return view('home');
});

Route::get('/jobs', function(){
    return view('jobs', 
    [
        'jobs' => Job::all()
    ]);
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/jobs/{id}', function($id){

    // $job = Arr::first($jobs, function($job) use ($id) {
    //     return $job['id'] == $id;
    // });

    $job = Job::findOrFail($id);

    return view('job', [
        'job' => $job
    ]);
});

Route::get('/employers', function(){
    return view('employers',
    [
        'employers' => Employer::all()
    ]);
});

Route::get('/employer/{id}', function($id){

    $employer = Employer::findOrFail($id);

    // dd($employer->jobs);

    return view('employer',
    [
        'employer' => $employer
    ]);
});
