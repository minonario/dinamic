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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','HomeController@index');
Route::get('/adquiere','HomeController@adquiere');
Route::get('/aliados','HomeController@aliados');
Route::get('/tutoriales','HomeController@tutoriales');
Route::get('/enlaces','HomeController@enlaces');
Route::get('/requisitos','HomeController@requisitos');
Route::get('/producto','HomeController@producto');
Route::get('/faq','HomeController@faq');
Route::post('/generatepdf','HomeController@generatepdf');
Route::get('/generatepdf','HomeController@generatepdf');
Route::post('/contact-us','HomeController@contactus');
Route::get('/contact-us', function () {
    return redirect('/');
});
Route::get('/cuentabvc','HomeController@cuentabvc');