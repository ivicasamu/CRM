<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes(['verify' => true]);

Route::middleware('auth')->group(function (){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/profiles/', 'ProfilesController@index')->name('profiles');
    Route::get('/profiles/create', 'ProfilesController@create')->name('profile_create');
    Route::post('/profiles', 'ProfilesController@store')->name('profile_store');
    Route::get('/profiles/{user:username}', 'ProfilesController@show')->name('profile');
    Route::get('/profiles/{user:username}/edit', 'ProfilesController@edit')->name('profile_edit');
    Route::patch('/profiles/{user:username}', 'ProfilesController@update')->name('profile_update');
    Route::delete('/profiles/{user:username}/destroy', 'ProfilesController@destroy')->name('profile_destroy');
});
