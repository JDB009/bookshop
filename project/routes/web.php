<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/books', 'App\Http\Controllers\BooksController');
Route::get('/bookdetails/{id}', 'App\Http\Controllers\BooksController@show');
Route::post('/bookdetails/{id}', 'App\Http\Controllers\BooksController@update');
Route::get('/authors', 'App\Http\Controllers\AuthorsController@authorindex');
Route::get('/authordetails/{id}', 'App\Http\Controllers\AuthorsController@showdetails');


