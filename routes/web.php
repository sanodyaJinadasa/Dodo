<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ResearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



// Macro Photography page
Route::get('/macro', [HomeController::class, 'macro'])->name('macro');
Route::get('/outreach', [HomeController::class, 'outreach'])->name('outreach');
Route::get('/publications', [HomeController::class, 'publications'])->name('publications');
Route::get('/research', [HomeController::class, 'research'])->name('research');
Route::get('/teaching', [HomeController::class, 'teaching'])->name('teaching');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/', [HomeController::class, 'index'])->name('/');



Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
    Route::resource('Aresearches', ResearchController::class);
    Route::resource('Apublications', PublicationController::class);
    Route::resource('teachings', App\Http\Controllers\TeachingController::class);
    Route::resource('gallery', App\Http\Controllers\GalleryController::class);
});
