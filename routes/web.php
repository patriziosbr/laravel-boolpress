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
//ROTTE per autenticazione 
// Auth::routes(['register' => false]); verify => false

Auth::routes();


Route::middleware('auth') //autenticazione
    ->namespace('Admin') //-> direttiva al path Admin/HomeController
    ->name('admin.') // direttiva alla route admin.pizzas.index admin.yournames.show
    ->prefix('admin') //url rotte
    ->group(function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('posts', 'PostController');	
    Route::get('/categories/{category}', 'CategoryController@show')->name('categories.show');

});

//rotte pubbliche
// Route::get('/', 'HomeController@index')->name('home');

// Rotta di fallback - {rotta parametrica} - se c'è questa levo la rotta pubblica 
// rotta di fallback sempre per ultima dopo admin

// Route::get("{any?}", function() {
//     return view("guest.home");
// })->where("any", ".*");

//questa rotta è uguale alla self closing
Route::get("{any?}", "HomeController@index")->where("any", ".*")->name('home');
//potrebbe servire ->name('home');