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

Route::resource('/books', 'App\Http\Controllers\BooksController');
Route::get('/bookdetails/{id}', 'App\Http\Controllers\BooksController@show');
Route::post('/bookdetails/{id}', 'App\Http\Controllers\BooksController@update');
Route::get('/authors', 'App\Http\Controllers\AuthorsController@sortByName');
Route::get('/authordetails/{id}', 'App\Http\Controllers\AuthorsController@showdetails');


