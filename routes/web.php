<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
   return view('home');

        $jobs = Job::all();
      // dd($jobs[0]->title);

});

Route::get('/jobs', function () {

   $jobs = Job::with('employer')->cursorPaginate();


    return view('jobs', ['jobs' => $jobs]);


});


Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id);


    return view('job',['job' => $job]);
});


Route::get('/contact', function () {
    return view('contact',

);
});
