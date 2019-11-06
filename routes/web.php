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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/visualize', 'HomeController@visualize')->name('visualize');
Route::get('/insertForm', 'SolarProductionController@display')->name('insertForm');
//Route::get('/predict', 'SolarProductionController@predict')->name('predict');
//download
Route::get( '/download/{filename}', 'SolarProductionController@download');

//predict
Route::get('/predict', 'GuzzlePostController@display')->name('display');
Route::post('/predict', 'GuzzlePostController@postRequest') ->name('predict');

//import Export
Route::get('/export', 'SolarProductionController@export')->name('export');
//advanced search
Route::get('/advancedSearch', 'SolarProductionController@advancedSearch')->name('advancedSearch');

Route::get('/pdf', 'SolarProductionController@pdf')->name('pdf');

//chart
Route::get('chart', 'SolarProductionController@chart')->name('chart');

//filter

Route::get('filter', 'SolarProductionController@display')->name('filter');
Route::post('filter/fetch_data', 'SolarProductionController@fetch_data')->name('filter.fetch_data');

//update profile
Route::get('users/{user}',  ['as' => 'edit', 'uses' => 'RegisterController@edit']);
//Route::patch('users/{user}/users',  ['as' => 'users.update', 'uses' => 'RegisterController@update']);
