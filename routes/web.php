<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/jobs', [App\Http\Controllers\MyJobsController::class, 'index'])->name('jobs.index');
Route::post('/jobs/store', [App\Http\Controllers\MyJobsController::class, 'store'])->name('jobs.store');
Route::get('/jobs/create', [App\Http\Controllers\MyJobsController::class, 'create'])->name('jobs.create');

// Search Routes
Route::any('/search', [App\Http\Controllers\SearchController::class, 'do'])->name('search.do');

