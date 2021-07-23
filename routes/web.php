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

Route::middleware('auth') //autenticazione
    ->namespace('Admin') //-> direttiva al path Admin/HomeController
    ->name('admin.') // direttiva alla route admin.pizzas.index admin.fakes.show
    ->prefix('admin') //url rotte
    ->group(function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('posts', 'PostController');	
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


