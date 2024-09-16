<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookmarkController;

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

// Route::get('/home','App\Http\Controllers\BookmarkController@index')->name('home');
// Route::get('/bookmark','App\Http\Controllers\BookmarkController@index');
Route::get('/bookmark', [BookmarkController::class, 'index']);
Route::get('/bookmark/{id}', 'BookmarkController@show')->where('id','[0-9]');