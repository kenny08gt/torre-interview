<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
//    die();
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/search', 'App\Http\Controllers\JobsController@search')->name('search');
Route::get('/traits/{user_slug}', 'App\Http\Controllers\UsersController@getTraitsProcessed')->name('users.traits');
Route::get('/compare/{user_slug}/{user_slug2}', 'App\Http\Controllers\UsersController@getTraitsCompared')->name('users.compare.traits');
Route::get('/{user_slug}', 'App\Http\Controllers\UsersController@show')->name('genome');
