<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/cvv', function () {
//     return view('cv');
// })->name('cvv');

// Route::get('/outreachv', function () {
//     return view('outreach');
// })->name('outreachv');


// Route::get('/photographer', function () {
//     return view('photographer');
// })->name('photographer');


// Route::get('/publications', function () {
//     return view('publications');
// })->name('publications');


// Route::get('/teaching', function () {
//     return view('teaching');
// })->name('teaching');


// Route::get('/blog', function () {
//     return view('blog');
// })->name('blog');




// Macro Photography page
Route::get('/macro', [HomeController::class, 'macro'])->name('macro');
Route::get('/outreach', [HomeController::class, 'outreach'])->name('outreach');
Route::get('/publications', [HomeController::class, 'publications'])->name('publications');
Route::get('/cv', [HomeController::class, 'cv'])->name('cv');
Route::get('/teaching', [HomeController::class, 'teaching'])->name('teaching');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('/');

