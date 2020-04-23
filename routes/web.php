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

route::get('/beranda','PelangganController@beranda') ->name('beranda');
route::get('/Pelanggan/create','PelangganController@create') ->name('Pelanggan.create');
route::post('/Pelanggan/','PelangganController@store') ->name('Pelanggan.store');
route::put('/Pelanggan/update/{id}','PelangganController@update') ->name('Pelanggan.update');
route::get('/Pelanggan/{id}/edit','PelangganController@edit') ->name('Pelanggan.edit');
route::get('/Pelanggan/delete/{id}','PelangganController@destroy') ->name('Pelanggan.destroy');
 
Auth::routes();

Route::get('/home', 'PelangganController@beranda')->name('home');
Route::get('/user', 'userController@beranda')->name('user');
