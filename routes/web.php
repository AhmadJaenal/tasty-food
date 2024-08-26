<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
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
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/menuDashboard', [MenuController::class, 'food'])->name('menuDashboard');
    Route::get('/newsDashboard', [NewsDashboardController::class, 'newsDashboard'])->name('newsDashboard');
    Route::get('/galleryDashboard', [GalleryDashboardController::class, 'galleryDashboard'])->name('galleryDashboard');
    Route::post('/deleteImage{id_image}', [GalleryDashboardController::class, 'deleteImage'])->name('deleteImage');

    Route::post('/deleteNews{id_news}', [NewsDashboardController::class, 'deleteNews'])->name('deleteNews');
    Route::post('/addImage', [GalleryDashboardController::class, 'addImage'])->name('addImage');
    Route::post('/addNews', [NewsDashboardController::class, 'addNews'])->name('addNews');
    Route::post('/addMenu', [MenuController::class, 'addMenu'])->name('addMenu');
    Route::post('/deleteMenu{id_menu}', [MenuController::class, 'deleteMenu'])->name('deleteMenu');
    Route::post('/updateImage{id_image}', [GalleryDashboardController::class, 'updateImage'])->name('updateImage');
    Route::post('/updateNews{id_news}', [NewsDashboardController::class, 'updateNews'])->name('updateNews');
    Route::post('/updateMenu{id_menu}', [MenuController::class, 'updateMenu'])->name('updateMenu');
});


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/action-login', [AuthController::class, 'actionlogin'])->name('actionlogin');
Route::get('/action-logout', [AuthController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
