<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::resource('users','UserController', ['only' => ['index', 'show', 'edit', 'update']]);

    Route::post('users/{id}/follow', 'UserController@follow')->name('follow');
    Route::delete('users/{id}/unfollow', 'UserController@unfollow')->name('unfollow');
    
    Route::resource('tweets', 'TweetsController', ['only' => ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']]);
});
