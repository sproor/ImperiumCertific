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

Route::view('/','home')->name('home');
Route::view('/certificate','certificate_home')->name('certificate_home');
Route::view('/contact','contact')->name('contact');
Route::view('/certificate/item','certificate_item')->name('certificate_item');
Route::view('/blog','blog_home')->name('blog_home');
Route::view('/training','training')->name('training');
