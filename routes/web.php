<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('buku', 'App\Http\Controllers\BukuController@index');
Route::get('buku/tambah', 'App\Http\Controllers\BukuController@tambah');
Route::post('buku/tambah_proses', 'App\Http\Controllers\BukuController@tambah_proses');
Route::get('buku/edit/{id}', 'App\Http\Controllers\BukuController@edit');
Route::post('buku/edit_proses', 'App\Http\Controllers\BukuController@edit_proses');
Route::get('buku/delete/{id}', 'App\Http\Controllers\BukuController@delete');