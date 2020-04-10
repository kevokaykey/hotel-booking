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
    return view('user.index');
});


Auth::routes();

Route::get('/admin', ['as' => 'admin', 'uses' => 'loginController@getlogin']);
Route::post('/login', [ 'as' => 'login', 'uses' => 'loginController@postlogin']);

Route::get('/hotelowner', ['as' => 'hotelowner', 'uses' => 'loginController@register']);
Route::post('/hregister', ['as' => 'hregister', 'uses' => 'loginController@postregister']);



Route::group(['middleware' =>['auth']],function(){

Route::get('/logout', ['as' =>'logout', 'uses' => 'loginController@getLogout']);


Route::resource('dashboard', 'dashboardController');
Route::resource('hotelinfo', 'hotelinfocontroller');
Route::resource('rooms', 'roomscontroller');
Route::resource('coupon', 'couponcontroller');
Route::resource('booking', 'bookingcontroller');
Route::resource('meal', 'mealcontroller');
Route::resource('facility', 'facilitycontroller');




}); 

Route::post('mpesa/checkout', 'CheckoutController@index');
Route::get('confirm/payment', 'CheckoutController@confirm');

Route::resource('availability', 'checkavailabilitycontroller');
Route::resource('roomavailability', 'availableroomscontroller');
Route::resource('book', 'bookcontroller');
Route::resource('bookdetail', 'bookingdetailscontroller');
Route::resource('bookstatus', 'checkbookingstatusController');

Route::get('/viewmap', ['as' =>'viewmap', 'uses' => 'mapcontroller@showmap']);

//Route::get('checkout', array('as' => 'paypal.paywithpaypal','uses' => 'PaypalController@payWithPaypal',));
Route::post('paypal', array('as' => 'paypal.paypal','uses' => 'PaypalController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'payment.status','uses' => 'PaypalController@getPaymentStatus',));

Route::post('mpesa/checkoutt', [ 'as' => 'checkoutt', 'uses' => 'mpesacontroller@check']);
Route::get('mpesa/checkstatus', [ 'as' => 'checkstatus', 'uses' => 'mpesacontroller@checkstatus']);

Route::get('/contact', ['as' => 'contact', 'uses' => 'pagescontroller@contact']);






