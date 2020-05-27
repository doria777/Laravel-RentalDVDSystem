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


// ----Actor----

Route::get('actor' , 'ActorController@index');

// ----Address----

Route::get('address' , 'AddressController@index');

// ----Cateory----

Route::get('category' , 'CategoryController@index');

// ----City----

Route::get('city' , 'CityController@index');

// ----Country----

Route::get('country' , 'CountryController@index');

// ----Customer----

Route::get('customer' , 'CustomerController@index');

// ----Film----

Route::get('film' , 'FilmController@index');

// ----FilmActor----

Route::get('film_actor' , 'FilmActorController@index');

// ----FilmCategory----

Route::get('film_category' , 'FilmCategoryController@index');

// ----FilmText----

Route::get('film_text' , 'FilmTextController@index');

// ----Inventory----

Route::get('inventory' , 'InventoryController@index');

// ----Language----

Route::get('language' , 'LanguageController@index');

// ----Payment----

Route::get('payment' , 'PaymentController@index');

// ----Rental----

Route::get('rental' , 'RentalController@index');

// ----Staff----

Route::get('staff' , 'StaffController@index');

// ----Store----

Route::get('store' , 'StoreController@index');

// 映画情報検索画面

Route::get('film_info_search' , 'FilmInfoSearchController@index');

// 映画情報検索結果画面

Route::post('film_info_search_result' , 'FilmInfoSearchController@result');