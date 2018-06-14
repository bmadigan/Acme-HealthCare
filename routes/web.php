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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {

    // Default Dashboard
    Route::get('/home', function () {
        return view('home');
    });

    // Patient Routes
    Route::get('/patients', 'PatientsController@index')->name('patients.index');
    Route::get('/patients/{patient}', 'PatientsController@show')->name('patients.show');

});
