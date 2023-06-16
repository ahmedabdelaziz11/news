<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\NewsController;
use Illuminate\Support\Facades\Route;


Route::middleware(['IsAdmin'])->prefix('admin')->group(function () {
    Route::get('dashboard',[DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('news', NewsController::class);
    Route::resource('admins', AdminController::class);
    Route::get('users-list', function(){
        return view('admin.user.index');
    });
    Route::get('get-feedback',function(){
        return view('admin.feedback.index');
    });
    Route::get('contacting-users',function(){
        return view('admin.contacting.index');
    });
});
