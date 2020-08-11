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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'LoginCOntroller@index');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::post('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/login', 'LoginCOntroller@login')->name('login');
Route::get('/register', 'LoginCOntroller@register')->name('register');
Route::get('/logout', 'LoginCOntroller@logout')->name('logout');
//summary page
Route::get('/summary/{token}/{days}', 'SummaryController@getSummaryData')->name('summary.data');
