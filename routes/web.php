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

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/home', 'HomeController@maxi')->name('home');
Route::get('/insertForm', 'SolarProductionController@display')->name('insertForm');
//Route::get('/predict', 'SolarProductionController@predict')->name('predict');
//download
Route::get( '/download/{filename}', 'SolarProductionController@download');

//predict
Route::get('/predict', 'GuzzlePostController@display')->name('display');
Route::post('/predict', 'GuzzlePostController@postRequest') ->name('predict');
Route::get('/insights', 'GuzzlePostController@insights') ->name('insights');

//import Export
Route::get('/export', 'SolarProductionController@export')->name('export');
//advanced search
Route::get('/advancedSearch', 'SolarProductionController@advancedSearch')->name('advancedSearch');

Route::get('/pdf', 'SolarProductionController@pdf')->name('pdf');


//filter

Route::get('filter', 'SolarProductionController@display')->name('filter');
Route::post('filter/fetch_data', 'SolarProductionController@fetch_data')->name('filter.fetch_data');

//update profile
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');

//clear cache

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

//charts
//lava
//Route::get('/get-post-chart-data', 'ChartDataController@getMonthlyPostData');

//charts-js


Route::get('visualize', 'SolarProductionController@displayChart')->name('visualize');
Route::get('charts/chart','SolarProductionController@chart');
Route::get('charts', 'SolarProductionController@displayChart')->name('charts');
