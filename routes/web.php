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
######### FIX PAGES  ############

Route::get('/', array('as' => 'index', 'uses' => 'MainController@index'));
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Kayak-Polo', array('as' => 'Kayak-Polo', 'uses' => 'MainController@KayakPoloDisplay'));
Route::get('/Slalom', array('as' => 'Slalom', 'uses' => 'MainController@SlalomDisplay'));
Route::get('/Ecole', array('as' => 'Ecole', 'uses' => 'MainController@EcoleDisplay'));
Route::get('/Pagayons', array('as' => 'Pagayons', 'uses' => 'MainController@PagayonsDisplay'));
Route::get('/Parcours', array('as' => 'Parcours', 'uses' => 'MainController@ParcoursDisplay'));
Route::get('/Descente', array('as' => 'Descente', 'uses' => 'MainController@DescenteDisplay'));
Route::get('/Actualites', array('as' => 'Actualites', 'uses' => 'MainController@ActualiteDisplay'));
Route::get('/Inscription', array('as' => 'Inscription', 'uses' => 'MainController@InscriptionDisplay'));
Route::get('/Conditions', array('as' => 'Conditions', 'uses' => 'MainController@ConditionsDisplay'));
Route::get('/Vêtements', array('as' => 'Vêtements', 'uses' => 'MainController@VêtementsDisplay'));
Route::get('/Bureau', array('as' => 'Bureau', 'uses' => 'MainController@BureauDisplay'));

######### REUNIONS  ############

Route::get('/Réunions', array('as' => 'Réunions', 'uses' => 'MeetingController@MeetingDisplay'));
Route::get('/AjouterCompteRendu', array('as' => 'AddRéunion', 'uses' => 'MeetingController@AjoutCompteRendu'));
Route::post('/Reunions', array('as' => 'StoreReunions', 'uses' => 'MeetingController@StoreReunions'));

######### CONTACT  ############

Route::get('/Contact', array('as' => 'Contact', 'uses' => 'MainController@ContactDisplay'));
Route::post('/Contact', array('as' => 'StoreContact', 'uses' => 'MainController@StoreContact'));

######### USERS  ############
Auth::routes(['register' => false]);
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


######### POSTS  ############


Route::get('/Edit/{id}', array('as' => 'Post_Edit', 'uses' => 'MainController@EditionPost'));
Route::post('/UpdatePost/{id}', array('as' => 'Post_Update', 'uses' => 'MainController@UpdatePost'));

Route::get('/CreatePost', array('as' => 'CreatePost', 'uses' => 'MainController@DisplayPost'));
Route::post('/CreatePost', array('as' => 'blog_post_form', 'uses' => 'MainController@CreateForm'));

Route::get('/Delete/{id}', array('as' => 'Post_Delete', 'uses' => 'MainController@DeletePost'));

Route::get('/Actualités/{ID}', array('as' => 'Actualités_Items', 'uses' => 'MainController@DisplayPostItems'));


######### RESERVATIONS ############

Route::get('/Reservation', array('as' => 'Reservation', 'uses' => 'ReservationController@ReservationDisplay'));

Route::get('/Reservation/1H', array('as' => 'OneHourDislay', 'uses' => 'ReservationController@OneHourDislay'));
Route::get('/Reservation/2H', array('as' => 'TwoHoursDislay', 'uses' => 'ReservationController@TwoHoursDisplay'));
Route::get('/Reservation/4H', array('as' => 'FoursHoursDisplay', 'uses' => 'ReservationController@FoursHoursDisplay'));
Route::get('/Reservation/Journee', array('as' => 'HeightHoursDisplay', 'uses' => 'ReservationController@HeightHoursDisplay'));

Route::post('/Reservation/StoreReservation', array('as' => 'StoreReservation', 'uses' => 'ReservationController@StoreReservation'));
Route::post('/Reservation/StoreReservationv2', array('as' => 'StoreReservation', 'uses' => 'ReservationController@StoreReservation'));

Route::post('/Reservation/Canoe-Kayak-Reservation/{id}', array('as' => 'EndReservation', 'uses' => 'ReservationController@ReservationBoat'));

######### ADMIN  ############

Route::get('/Admin/{date}', array('as' => 'Admin', 'uses' => 'AdminController@AdminDisplay'));
Route::post('/Admin/ChangeDate', array('as' => 'AdminDateChangement', 'uses' => 'AdminController@AdminChangeDate'));
Route::get('/PrintPDF/{date}', array('as' => 'PrintPDF', 'uses' => 'AdminController@PRINT'));
Route::get('/Admin/DeleteReservation/{id}/{date}', array('as' => 'DeleteReservation', 'uses' => 'AdminController@DeleteReservation'));


