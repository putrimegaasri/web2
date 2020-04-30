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

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/roster','rostercontroller@index');
Route::get('/roster/create','rostercontroller@create');
Route::get('/roster/{roster}','rostercontroller@show');
Route::post('/roster','rostercontroller@store');
route::delete('/roster/{roster}','rostercontroller@destroy');
route::get('/roster/{roster}/edit','rostercontroller@edit');
route::patch('/roster/{roster}','rostercontroller@update');
