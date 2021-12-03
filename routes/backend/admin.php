<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FileManagerController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\ModuleExplorerController;
use App\Http\Controllers\Backend\OurClientController;
use App\Http\Controllers\Backend\OurClientCategoryController;
use App\Http\Controllers\Backend\SolutionsController;
use App\Http\Controllers\Backend\SolutionsInquireController;
use App\Http\Controllers\Backend\MilestoneController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('milestone', 'MilestoneController@index')->name('milestone.index');
Route::get('milestone/create', 'MilestoneController@create')->name('milestone.create');
Route::post('milestone/store', 'MilestoneController@store')->name('milestone.store');
Route::get('milestone/getdetails', 'MilestoneController@getdetails')->name('milestone.getdetails');
Route::get('milestone/edit/{id}', 'MilestoneController@edit')->name('milestone.edit');
Route::post('milestone/update', 'MilestoneController@update')->name('milestone.update');
Route::get('milestone/delete/{id}', 'MilestoneController@destroy')->name('milestone.destroy');

Route::get('solutions', 'SolutionsController@index')->name('solutions.index');
Route::get('solutions/create', 'SolutionsController@create')->name('solutions.create');
Route::post('solutions/store', 'SolutionsController@store')->name('solutions.store');
Route::get('solutions/getdetails', 'SolutionsController@getdetails')->name('solutions.getdetails');
Route::get('solutions/edit/{id}', 'SolutionsController@edit')->name('solutions.edit');
Route::post('solutions/update', 'SolutionsController@update')->name('solutions.update');
Route::get('solutions/delete/{id}', 'SolutionsController@destroy')->name('solutions.destroy');

Route::get('s_inquire', 'SolutionsInquireController@index')->name('s_inquire.index');
Route::get('s_inquire/getdetails', 'SolutionsInquireController@getdetails')->name('s_inquire.getdetails');
Route::get('s_inquire/edit/{id}', 'SolutionsInquireController@edit')->name('s_inquire.edit');
Route::post('s_inquire/update', 'SolutionsInquireController@update')->name('s_inquire.update');
Route::get('s_inquire/delete/{id}', 'SolutionsInquireController@destroy')->name('s_inquire.destroy');

Route::get('our_client_category', 'OurClientCategoryController@index')->name('our_client_category.index');
Route::post('our_client_category/store', 'OurClientCategoryController@store')->name('our_client_category.store');
Route::get('our_client_category/getdetails', 'OurClientCategoryController@getdetails')->name('our_client_category.getdetails');
Route::get('our_client_category/edit/{id}', 'OurClientCategoryController@edit')->name('our_client_category.edit');
Route::post('our_client_category/update', 'OurClientCategoryController@update')->name('our_client_category.update');
Route::get('our_client_category/delete/{id}', 'OurClientCategoryController@destroy')->name('our_client_category.destroy');

Route::get('our_client', 'OurClientController@index')->name('our_client.index');
Route::get('our_client/create', 'OurClientController@create')->name('our_client.create');
Route::post('our_client/store', 'OurClientController@store')->name('our_client.store');
Route::get('our_client/getdetails', 'OurClientController@getdetails')->name('our_client.getdetails');
Route::get('our_client/edit/{id}', 'OurClientController@edit')->name('our_client.edit');
Route::post('our_client/update', 'OurClientController@update')->name('our_client.update');
Route::get('our_client/delete/{id}', 'OurClientController@destroy')->name('our_client.destroy');




Route::get('file_manager', [FileManagerController::class, 'index'])->name('file_manager.index');
Route::get('file_manager/getdetails', [FileManagerController::class, 'getdetails'])->name('file_manager.getdetails');
Route::get('file_manager/delete/{id}', [FileManagerController::class, 'destroy'])->name('file_manager.destroy');

Route::get('module-explorer', [ModuleExplorerController::class, 'index'])->name('module.index');
Route::get('module-explorer/show/{slug}', [ModuleExplorerController::class, 'show'])->name('module.show');
Route::post('module-explorer/install/', [ModuleExplorerController::class, 'install'])->name('module.install');
Route::post('module-explorer/uninstall/', [ModuleExplorerController::class, 'uninstall'])->name('module.uninstall');


Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
Route::post('settings/update', [SettingsController::class, 'settings_update'])->name('settings_update');

Route::get('about_us', [SettingsController::class, 'about_us'])->name('about_us');
Route::post('about_us/update', [SettingsController::class, 'about_us_update'])->name('about_us_update');

Route::get('privacy_policy', [SettingsController::class, 'privacy_policy'])->name('privacy_policy');
Route::post('privacy_policy/update', [SettingsController::class, 'privacy_policy_update'])->name('privacy_policy_update');

Route::get('terms_and_conditions', [SettingsController::class, 'terms_and_conditions'])->name('terms_and_conditions');
Route::post('terms_and_conditions_update/update', [SettingsController::class, 'terms_and_conditions_update'])->name('terms_and_conditions_update');

Route::get('contactus_thanks', [SettingsController::class, 'contactus_thanks'])->name('contactus_thanks');
Route::post('contactus_thanks_update/update', [SettingsController::class, 'contactus_thanks_update'])->name('contactus_thanks_update');


