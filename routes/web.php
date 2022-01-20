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

Route::get('/', function(){
    return view ('welcome');
})->name('welcome');

Route::get('trips', 'TripController@index')->name('trips');
Route::get('trips/{trip}', 'TripController@show')->name('trip');
Route::get('blog', 'PostController@index')->name('blog');
Route::get('blog/{post}', 'PostController@show')->name('post');


