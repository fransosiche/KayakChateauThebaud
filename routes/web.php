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
Route::get('/kayakpolo', array('as' => 'kayakpolo', 'uses' => 'MainController@KayakPoloDisplay'));
Route::get('/slalom', array('as' => 'slalom', 'uses' => 'MainController@SlalomDisplay'));
Route::get('/ecole', array('as' => 'ecole', 'uses' => 'MainController@EcoleDisplay'));

Route::get('/home', 'HomeController@index')->name('home');
