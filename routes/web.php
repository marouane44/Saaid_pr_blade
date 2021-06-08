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

Route::get('/', function () {
  
    
    return view('welcome');
});
Route::get('atlas_valleys_trek2.html/{id}', 'atlas_valleys_trek2@index')->name('atlas_valleys_trek2.html');

Route::get('/all_hikes.html','PostController@index')->name('post.all_hikes');
Route::get('atlas_valleys_trek.html/{id}', 'atlas_valleys_trek@index')->name('atlas_valleys_trek.html');

