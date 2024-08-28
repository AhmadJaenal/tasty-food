<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GalleryDashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsDashboardController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;


//  Landing Page
Route::get('/', [LandingPageController::class, 'landingPage'])->name('landingPage');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/news', [NewsController::class, 'news'])->name('news');
Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('sendEmail');


// Dashboard
Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    
    // Contact
    Route::get('/contactDashboard', [ContactDashboardController::class, 'contactDashboard'])->name('contactDashboard');
    Route::post('/update/contact{id_contact}', [ContactDashboardController::class, 'update'])->name('updateContact');
    
    // News
    Route::post('/updateNews/{id_news}', [NewsDashboardController::class, 'updateNews'])->name('updateNews');
    Route::post('/deleteNews/{id_news}', [NewsDashboardController::class, 'deleteNews'])->name('deleteNews');
    Route::post('/addNews', [NewsDashboardController::class, 'addNews'])->name('addNews');
    Route::get('/newsDashboard', [NewsDashboardController::class, 'newsDashboard'])->name('newsDashboard');
    
    // Gallery
    Route::post('/updateImage{id_image}', [GalleryDashboardController::class, 'updateImage'])->name('updateImage');
    Route::post('/deleteImage{id_image}', [GalleryDashboardController::class, 'deleteImage'])->name('deleteImage');
    Route::post('/addImage', [GalleryDashboardController::class, 'addImage'])->name('addImage');
    Route::get('/galleryDashboard', [GalleryDashboardController::class, 'galleryDashboard'])->name('galleryDashboard');
    
    // Menu 
    Route::get('/menuDashboard', [MenuController::class, 'food'])->name('menuDashboard');
    Route::post('/deleteMenu{id_menu}', [MenuController::class, 'deleteMenu'])->name('deleteMenu');
    Route::post('/updateMenu{id_menu}', [MenuController::class, 'updateMenu'])->name('updateMenu');
    Route::post('/addMenu', [MenuController::class, 'addMenu'])->name('addMenu');
    
    // Slider
    Route::get('/sliderDashboard', [SliderController::class, 'slider'])->name('slider');
    Route::post('/addImgSlider', [SliderController::class, 'addImageSlider'])->name('addImageSlider');
    Route::post('/updateImageSlider/{id_img_slider}', [SliderController::class, 'updateImageSlider'])->name('updateImageSlider');
    Route::post('/deleteImageSlider/{id_img_slider}', [SliderController::class, 'deleteImageSlider'])->name('deleteImageSlider');
});

// Authentication
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/action-login', [AuthController::class, 'actionlogin'])->name('actionlogin');
Route::get('/action-logout', [AuthController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
