<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

// Route::get('/', function () {
//     return view('welcome');
// });



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');


Route::get('/', [HomeController::class, 'home']);

Route::prefix('/category')->group(function(){
    Route::get('product', [HomeController::class, 'product'])->name('product');
    Route::get('program', [HomeController::class, 'program'])->name('program');
});

Route::get('/news', [HomeController::class, 'news'])->name('news');


Route::get('/about-us', [HomeController::class, 'about'])->name('about-us');


Route::get('/contact', [HomeController::class, 'contact'])->name('contact');