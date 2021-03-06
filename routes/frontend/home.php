<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\AizUploadController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\OurClientController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\OurSolutionsController;
use App\Http\Controllers\Frontend\TestController;
/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */


Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('news', [NewsController::class, 'index'])->name('news');
Route::get('our-clients', [OurClientController::class, 'index'])->name('our-clients');
Route::get('contact-us', [ContactUsController::class, 'index'])->name('contact-us');
Route::get('services', [ServicesController::class, 'index'])->name('services');
Route::get('our-solutions', [OurSolutionsController::class, 'index'])->name('our-solutions');
Route::get('test', [TestController::class, 'index'])->name('test');

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::post('/aiz-uploader', [AizUploadController::class, 'show_uploader']);
Route::post('/aiz-uploader/upload', [AizUploadController::class, 'upload']);
Route::get('/aiz-uploader/get_uploaded_files', [AizUploadController::class, 'get_uploaded_files']);
Route::post('/aiz-uploader/get_file_by_ids', [AizUploadController::class, 'get_preview_files']);
Route::get('/aiz-uploader/download/{id}', [AizUploadController::class, 'attachment_download'])->name('download_attachment');
Route::get('uploads/all/{file_name}',[AizUploadController::class,'get_image_content']);

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        // User Dashboard Specific
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');

        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    });
});
