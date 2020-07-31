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

Route::get('/', array('as' => 'index', 'uses' => 'MainController@index'));

Auth::routes();
Route::get('/kayakpolo', array('as' => 'kayakpolo', 'uses' => 'MainController@KayakPoloDisplay'));
Route::get('/slalom', array('as' => 'slalom', 'uses' => 'MainController@SlalomDisplay'));
Route::get('/ecole', array('as' => 'ecole', 'uses' => 'MainController@EcoleDisplay'));

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/Edit/{id}', array('as' => 'Post_Edit', 'uses' => 'MainController@EditionPost'));
Route::post('/UpdatePost/{id}', array('as' => 'Post_Update', 'uses' => 'MainController@UpdatePost'));

Route::get('/CreatePost', array('as' => 'CreatePost', 'uses' => 'MainController@DisplayPost'));
Route::post('/CreatePost',array('as' => 'blog_post_form', 'uses' => 'MainController@CreateForm'));

Route::get('/Delete/{id}', array('as' => 'Post_Delete', 'uses' => 'MainController@DeletePost'));


