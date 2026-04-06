<?php

use App\Http\Controllers\admin\authController;
use App\Http\Controllers\admin\dashboardController;
use Illuminate\Support\Facades\Route;

/** NOTE ~ Admin Routes */
Route::prefix("/admin")->name("admin.")->group(function () {

    /** NOTE ~ Auth Routes */
    Route::prefix('/auth')->name('auth.')->group(function () {
        Route::get("/login", [authController::class, "showLogin"])->name('login');
        Route::get("/forgot-password", [authController::class, "showForgotPassword"])->name('forgot-password');
    });
    Route::get("/", [dashboardController::class, "showAdminDashboard"])->name('dashboard');
});
