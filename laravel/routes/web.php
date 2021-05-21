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


Route::get('/', 'HomeController@index');

Route::post('/create', 'TaskController@create')->name('form.create');

Route::get('/task/{id}', 'TaskController@view')->name('form.view');
// Route::get('/task/{id}', 'TaskController@show')->name('form.show');


// Route::post('/create', 'RegistrController@create');

// Route::get('/registration', 'RegistrController@view');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
