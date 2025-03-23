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

// Edit
 Route::get('/jobs/{id}/edit', function ($id) {

    $job = Job::find($id);


    return view('jobs.edit',['job' => $job]);
});


// Update

Route::patch('/jobs/{id}', function ($id) {

    request()->validate([
        'title' => 'required',
        'salary' => 'required',
    ]);
    // auth (On hold ...)
    // update

    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);


    // redirect

    return redirect('/jobs/' . $job->id);
});


Route::delete('/jobs/{id}', function ($id) {

    // auth
    // delete the job

     Job::findOrFail($id)->delete();
   

    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact',

);
});
