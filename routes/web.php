<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\Auth\HomeController;
use App\Http\Controllers\Auth\OrderController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;


require 'layouts.php';
require 'customer.php';


Route::get('/home', [HomeController::class, 'index'])->name('home');
// category
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

// items
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');



Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
  Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
  Route::post('register', 'RegisterController@register')->name('register.store');
  Route::get('login', 'LoginController@showLoginForm')->name('login');
  Route::post('login', 'LoginController@portal_admin_login')->name('login.store');
  Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
  Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');
  Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
  Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
});

Route::middleware(['auth'])->group(function () {

  Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
      Route::get('/home', [HomeController::class, 'index'])->name('home');
      Route::get('logout', 'LoginController@logout')->name('logout');
      Route::get('password/confirm', 'ConfirmPasswordController@showConfirmForm')->name('password.confirm');
      Route::post('password/confirm', 'ConfirmPasswordController@confirm')->name('password.confirm');
      Route::get('email/verify', 'VerificationController@show')->name('verification.notice');
      Route::get('email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify');
      Route::post('email/resend', 'VerificationController@resend')->name('verification.resend');
  });


      Route::get('/order', [OrderController::class, 'index'])->name('order.index');


});
