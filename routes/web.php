<?php

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
})->name('welcome');

//Laravel 5.7 CRUD Example Tutorial For Beginners From Scratch
Route::resource('shares', 'ShareController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Laravel File Upload Example Tutorial From Scratch
Route::get('/home-file', 'HomeController@indexFile')->name('home-file');
Route::post('file/upload', 'FileController@store')->name('file.upload');
Route::post('upload', 'FileController@upload')->name('upload');

//Laravel Dropzone Image Upload Tutorial With Example
Route::get('/home-file-dropzone', 'HomeController@indexFileDropzone')->name('home-file-dropzone');
