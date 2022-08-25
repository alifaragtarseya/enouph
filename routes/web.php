<?php

use App\Http\Controllers\front\AboutController;
use App\Http\Controllers\front\BlogController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\ServiceController;
use App\Http\Controllers\LangController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class,'index'])->name('home.index');
Route::get('/about-us', [AboutController::class,'index'])->name('about.index');
Route::get('/contact', [ContactController::class,'index'])->name('contact.index');
Route::get('/services', [ServiceController::class,'index'])->name('services.index');
Route::get('/blogs', [BlogController::class,'index'])->name('blog.index');
Route::get('/blogs/view-blog', [BlogController::class,'show'])->name('blog.show');
// Language Route
Route::get('lang',[LangController::class , 'index'])->name('lang.index');
