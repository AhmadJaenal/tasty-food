<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'landingPage'])->name('landingPage');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/news', [NewsController::class, 'news'])->name('news');
Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');