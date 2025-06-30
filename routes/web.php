<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('test', function() {
    $job = Job::first();

    TranslateJob::dispatch($job);
    return 'Done';
});

Route::view('/', 'home')->name('home');
Route::view('/contact', 'contact');


// Route::get('/jobs', [JobController::class, 'index']);
// Route::get('/jobs/create', [JobController::class, 'create']);
// Route::get('/jobs/{job}', [JobController::class, 'show']);
// Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
// Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->middleware('auth')->can('edit-job', 'job');
// Route::patch('/jobs/{job}', [JobController::class, 'update']);
// Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index')->name('jobs.index');
    Route::get('/jobs/create', 'create')->name('jobs.create');
    Route::get('/jobs/{job}', 'show')->name('jobs.show');
    Route::post('/jobs', 'store')->middleware('auth')->name('jobs.store');
    Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
        ->middleware('auth')
        ->can('edit-job', 'job')
        ->name('jobs.edit');
    Route::patch('/jobs/{job}', 'update')
        ->middleware('auth')
        ->can('edit-job', 'job')
        ->name('jobs.update');
    Route::delete('/jobs/{job}', 'destroy')
        ->middleware('auth')
        ->can('edit-job', 'job')
        ->name('jobs.destroy');
});

// Auth
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register.create');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store'])->name('login.store');
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');
