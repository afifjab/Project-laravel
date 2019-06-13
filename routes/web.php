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
});



Route::get('/acceuil', function () {
    return view('accueil');
});

/*Route::get('/service', function () {
    return view('service');
});*/

Route::get('/contacte', function () {
    return view('accueil');
});

/*Route::get('cvs','CvController@index');
Route::get('cvs/create','CvController@create');
Route::post('cvs','CvController@store');
Route::get('cvs/{id}/edit','CvController@edit');
Route::put('cvs/{id}','CvController@update');
Route::delete('cvs/{id}','CvController@destroy');*/

Route::resource('cvs','cvController');

Auth::routes();

Route::get('/home', 'HomeController@index1')->name('home');
Route::get('/cvs', 'CvController@index')->name('cvs');

Route::get('/service', 'ServiceController@index1')->name('service');
