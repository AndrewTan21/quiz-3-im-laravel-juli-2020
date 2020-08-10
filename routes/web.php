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
    return view('index');
});

Route::get('/projek', 'ItemController@index'); // menampilkan semua
Route::post('/projek', 'ItemController@store'); // menyimpan data
Route::get('/projek/create', 'ItemController@create'); // menampilkan halaman form
Route::get('/projek/{id}', 'ItemController@show'); // menampilkan detail item dengan id 
Route::get('/projek/{id}/edit', 'ItemController@edit'); // menampilkan form untuk edit item
Route::put('/projek/{id}', 'ItemController@update'); // menyimpan perubahan dari form edit
Route::delete('/projek/{id}', 'ItemController@destroy'); // menghapus data dengan id