<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::controller(JobController::class)->group(function () {
    Route::view('/about', 'about');

    Route::get('/jobs', 'index');
    Route::get('/jobs/create',  'create');
    Route::get('/jobs/{job}',  'show');
    Route::post('/jobs',  'store');
    Route::get('/jobs/{id}/edit',  'edit');
    Route::patch('/jobs/{job}',  'update');
    Route::delete('/jobs/{job}',  'destroy');
});



Route::view('/contac', 'contact');

