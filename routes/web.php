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

Route::get('/searchMovie', 'mainController@searchMovie');
Route::post('/logout', 'memberLoginController@logout')->name('logout');
Route::get('/checklogin', 'memberLoginController@checklogin');
Route::post('/login', 'memberLoginController@login');
Route::get('/', 'mainController@index')->name('index');
Route::post('/movieGetCinema', 'mainController@movieGetCinema');
Route::post('/movieGetSession', 'mainController@movieGetSession');
Route::post('/sessionGetTime', 'mainController@sessionGetTime');
Route::post('/buyTicket', 'mainController@buyTicket');
Route::get('/Ticketing/selectSeats/{id}', 'mainController@redirectToBuyTicket');
Route::post('/buySeat', 'mainController@buySeat');
Route::get('/movie/now-showing', 'mainController@movieList')->name('nowshowing');
Route::get('/movie/coming-soon', 'mainController@comingSoon')->name('comingsoon');
Route::get('/movie/{movie}', 'mainController@movie');
Route::get('/Ticketing/Confirm/{userid}', 'mainController@confirm');
Route::get('/terms-conditions', function () {
	return view('terms-conditions');
});
//Route::post('/nextToPayment', 'mainController@nextToPayment');
Route::post('/timeOut', 'mainController@timeOut');
Route::get('/getdone', function () {
	return view('index');
});

Route::get('done', [
	'as' => 'paypal.done',
	'uses' => 'payPalController@getDone',
]);
Route::get('cancel', [
	'as' => 'paypal.cancel',
	'uses' => 'payPalController@getCancel',
]);
Route::post('/getCheckout', 'payPalController@getCheckout')->name('getCheckout');
Route::get('/showtimes/byMovie/{movieID}/{showingDate?}', 'mainController@byMovie')->name('byMovie');
Route::post('/filterCinemaGetMovie', 'mainController@filterCinemaGetMovie');
Route::post('/filterRatingGetMovie', 'mainController@filterRatingGetMovie');
Route::post('/filterLanguageGetMovie', 'mainController@filterLanguageGetMovie');
Route::get('/cinemas/all-cinemas', 'mainController@allCinemas');
Route::get('/cinemas/{cinemaID}', 'mainController@cinemaDetail');
Route::get('/showtimes/byCinema/{cinemaID}', 'mainController@byCinema');
Route::get('/movieclub/createmember', 'memberRegisterController@createmember');
Route::post('/movieclub/createmember', 'memberRegisterController@register');
Route::post('/movie/now-showing/language', 'mainController@language');

Route::get('/redirect', 'SocialAuthController@redirect')->name('facebookLogin');
Route::get('/callback', 'SocialAuthController@callback');
Route::get('/myprofile/booking-history', 'mainController@bookingHistory')->name('bookingHistory');
//////////////////////admin////////////////////////////
Route::get('/admin/movie/movie', 'adminController@getMovie')->name('getMovie');
Route::group(['middleware'=>'checkAdmin'], function(){
	Route::get('/admin/movie', 'adminController@index')->name('adminDashboard');
	Route::post('/admin/logout', 'adminLoginController@logout')->name('adminLogout');
	Route::get('/admin/editMovie/{movieID}', 'adminController@editMovie');
	Route::post('/admin/editMovie/{movieID}', 'adminController@editMoviePost')->name('editMoviePost');
	Route::get('/admin/showing', 'adminController@showing')->name('showing');
});

Route::group(['middleware' => 'adminGuest'], function(){
	Route::get('/admin/login', function () {
		return view('admin.login');
	})->name('adminLoginPage');
	Route::post('/admin/login', 'adminLoginController@login')->name('adminLogin');
});

//
// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');
