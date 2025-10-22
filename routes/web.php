<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\WriterController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


// Show all
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/jobs', [JobsController::class, 'index'])->name('jobs');
Route::get('/companies', [CompanyController::class, 'index'])->name('companies');
Route::get('/writers', [WriterController::class, 'index'])->name('writers');

// Edit Single
Route::get('/jobs/{job}', [HomeController::class, 'show'])->name('jobShow');
Route::get('/companies/{company}', [CompanyController::class, 'show'])->name('companyShow');
Route::get('/writers/{writer}', [WriterController::class, 'show'])->name('writerShow');


Route::get('/post-a-job', function () {
    return Inertia::render('PostAJob');
})->name('post-a-job');
