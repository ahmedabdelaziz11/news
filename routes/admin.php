<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\NewsController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'IsAdmin'])->prefix('admin')->group(function () {
    Route::get('dashboard',[DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('news', NewsController::class);
});
