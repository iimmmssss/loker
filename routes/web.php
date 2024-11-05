<?php

use App\Models\jobsss;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\JobsssController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ApplicationsController::class, 'index'])->name('home');
Route::resource('applications', ApplicationsController::class);
Route::resource('jobs', jobsssController::class);