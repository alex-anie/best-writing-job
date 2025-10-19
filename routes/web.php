<?php

use App\Http\Controllers\JobsController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', [JobsController::class, 'index'])->name('home');

Route::get('/jobs', function () {
    return Inertia::render('Jobs');
})->name('jobs');

Route::get('/companies', function () {
    return Inertia::render('Companies');
})->name('companies');

Route::get('/writers', function () {
    return Inertia::render('Writers');
})->name('writers');

Route::get('/post-a-job', function () {
    return Inertia::render('PostAJob');
})->name('post-a-job');

// require __DIR__.'/settings.php';
// require __DIR__.'/auth.php';
// require __DIR__.'/dashboard.php';
