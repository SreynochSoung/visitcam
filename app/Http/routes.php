<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'IndexController@index');

Route::get('index', 'IndexController@index');
Route::get('tour_{name}', 'TourController@index');

Route::get('provinces', 'ProvincesController@index');
Route::get('province_imgs_{id}', 'ProvincesImgsController@index');
Route::get('province_map_{id}', 'ProvinceMapController@index');
Route::get('province_hotel_{id}', 'ProvinceHotelController@index');
Route::get('province_tour_{id}', 'ProvinceTourController@index');
Route::get('province_{id}', 'ProvinceDetailController@index');

Route::get('travel_guide', 'FestivalController@index');
Route::get('geography_weather', 'GeographyController@index');
Route::get('history', 'HistoryController@index');
Route::get('religion', 'ReligionController@index');
Route::get('traditional_costume', 'TraditionalController@index');
Route::get('festival_event', 'FestivalController@index');
Route::get('eventImg_{id}', 'EventImageController@index');
Route::get('currency', 'CurrencyController@index');
Route::get('transportation', 'TransportationController@index'); 

Route::get('contact_us', 'ContactController@index');
Route::get('about_us', 'AboutController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
?>
