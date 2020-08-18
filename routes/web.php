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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Routes pour client
Route::get('/client/add', 'ClientController@add')->name('addclient');
Route::get('/client/getAll', 'ClientController@getAll')->name('getallclient');
Route::get('/client/edit/{id}', 'ClientController@edit')->name('editclient');
Route::get('/client/update', 'ClientController@update')->name('updateclient');
Route::get('/client/delete/{id}', 'ClientController@delete')->name('deleteclient');

//Routes pour compte
Route::get('/compte/add', 'CompteController@add')->name('addcompte');
Route::get('/compte/getAll', 'CompteController@getAll')->name('getallcompte');
Route::get('/compte/edit/{id}', 'CompteController@edit')->name('editcompte');
Route::get('/compte/update', 'CompteController@update')->name('updatecompte');
Route::get('/compte/delete/{id}', 'CompteController@delete')->name('deletecompte');