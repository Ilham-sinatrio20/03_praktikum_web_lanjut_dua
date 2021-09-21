<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Routing Home
Route::get('/', function () {
    return view('home');
});

// Routing Product
Route::prefix('user')->group(function(){
    Route::get('/products', function () {
        return view('product');
    });
});

// Routing News
Route::get('news/{id}', function ($id=1) {
    return view('news');
});

// Routing Program
Route::prefix('programs')->group(function(){
    Route::get('/program', function () {
        return view('program');
    });
});

// Routing About-Us
Route::get('/about', function () {
    return view('about-us');
});

// Routing Contact-us
Route::resource('contact', ContactController::class)->only([
    'show'
]);
