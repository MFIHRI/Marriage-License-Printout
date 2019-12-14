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
Route::post('save', 'ApplicantController@store')->name('saveApplicant');


Route::get('/print/{id}', 'ApplicantController@print')->name('printData');

Route::get('/pdf', function (){
    return view('partials.pdf');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::group(['prefix' => 'applicant'], function () {
    Route::get('all', 'HomeController@information')->name('infoAll');
    Route::get('/pdf/{id}', 'HomeController@pdf')->name('downloadPdf');
});
