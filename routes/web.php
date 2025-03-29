<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::resource('jobs', JobController::class);

Route::view('/contact', 'contact');

