<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
   return view('home');

        $jobs = Job::all();
      // dd($jobs[0]->title);

});

// index
Route::get('/jobs', function () {

   $jobs = Job::with('employer')->latest()->simplePaginate();


    return view('jobs.index', ['jobs' => $jobs]);


});

// create
Route::get('/jobs/create', function () {
    return view('jobs.create');

});

// show job
Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id);


    return view('jobs.show',['job' => $job]);
});

// Store
 Route::post('/jobs', function () {

    request()->validate([
        'title' => 'required',
        'salary' => 'required',
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');

 });

 Route::get('/jobs/{id}/edit', function ($id) {

    $job = Job::find($id);


    return view('jobs.edit',['job' => $job]);
});




Route::get('/contact', function () {
    return view('contact',

);
});
