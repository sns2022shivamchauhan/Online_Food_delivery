<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthCustomer\ForgotPasswordController;
use App\Http\Controllers\AuthCustomer\LoginController;
use App\Http\Controllers\AuthCustomer\RegisterController;
use App\Http\Controllers\AuthCustomer\ResetPasswordController;
use App\Http\Controllers\FrontendController\FrontEndController;
use App\Http\Controllers\Frontendcontroller\CartController;
use App\Http\Controllers\AuthCustomer\CustomrController;
use App\Http\Controllers\AuthCustomer\HomeController;



// Guest Routes
Route::group(['namespace' => 'App\Http\Controllers\AuthCustomer'], function () {
  Route::middleware(['guest:customer-web'])->group(function () {
    Route::get('/frontend/register', [RegisterController::class, 'showRegistrationForm'])->name('customer.register');
    Route::post('/frontend/register', [RegisterController::class, 'register'])->name('customer.register');
    Route::get('/frontend/login', [LoginController::class, 'showLoginForm'])->name('customer.login');
    Route::post('/frontend/login', [LoginController::class, 'customer_login'])->name('customer.login');
    Route::get('/frontend/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('customer.password.request');
    Route::post('/frontend/password/reset', [ForgotPasswordController::class, 'reset'])->name('customer.password.update');
    Route::post('/frontend/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('customer.password.email');
    Route::get('/frontend/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('customer.password.reset');
  });
});

// Auth Routes
Route::middleware(['auth:customer-web'])->group(function () {
  Route::post('/frontend/logout', [LoginController::class, 'logout'])->name('customer.logout');
  route::get('/frontend/profile', [CustomrController::class, 'index'])->name('customer.profile.index');
  route::put('/frontend/profile', [CustomrController::class, 'profile_update'])->name('customer.profile.update');
  route::get('/frontend/change_password', [CustomrController::class, 'change_password'])->name('customer.change_password.index');
  route::put('/frontend/change_password', [CustomrController::class, 'change_password_update'])->name('customer.change_password.update');

  Route::get('/home', [HomeController::class, 'index'])->name('home');

});
