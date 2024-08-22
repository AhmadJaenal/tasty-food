<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GalleryDashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsDashboardController;
use Illuminate\Support\Facades\Route;


//  Landing Page
Route::get('/', [LandingPageController::class, 'landingPage'])->name('landingPage');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/news', [NewsController::class, 'news'])->name('news');
Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/menuDashboard', [MenuController::class, 'menu'])->name('menuDashboard');
Route::get('/newsDashboard', [NewsDashboardController::class, 'newsDashboard'])->name('newsDashboard');
Route::get('/galleryDashboard', [GalleryDashboardController::class, 'galleryDashboard'])->name('galleryDashboard');
Route::post('/deleteImage{id_image}', [GalleryDashboardController::class, 'deleteImage'])->name('deleteImage');

Route::post('/deleteNews{id_news}', [NewsDashboardController::class, 'deleteNews'])->name('deleteNews');
Route::get('/addImage', [GalleryDashboardController::class, 'addImage'])->name('addImage');




