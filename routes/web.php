<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('news/{news}',[NewsController::class, 'show']);
Route::get('news-search/{cat_id?}',[NewsController::class, 'index']);
Route::resource('contact-us', ContactUsController::class)->only(['create', 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/prediction',function(){ return view('prediction'); });
    Route::post('make-predictions',[NewsController::class, 'predict']);
    Route::post('feedback',[NewsController::class, 'feedback']);
});

require __DIR__.'/admin.php';
require __DIR__.'/auth.php';
