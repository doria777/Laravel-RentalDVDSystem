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

Route::get('/actor', function () {
    return view('actor');
});

Route::get('actor' , 'ActorController@index');

// ----Address----

Route::get('/address', function () {
    return view('address');
});

Route::get('address'  , 'AddressController@index');

// ----Cateory----

Route::get('/category', function () {
    return view('category');
});

Route::get('category'  , 'CategoryController@index');

// ----City----

Route::get('/city', function () {
    return view('city');
});

Route::get('city'  , 'CityController@index');

// ----Country----

Route::get('/country', function () {
    return view('country');
});

Route::get('country'  , 'CountryController@index');

// ----Customer----

Route::get('/customer', function () {
    return view('customer');
});

Route::get('customer'  , 'CustomerController@index');

// ----Film----

Route::get('/film', function () {
    return view('film');
});

Route::get('film'  , 'FilmController@index');

// ----FilmActor----

Route::get('/film_actor', function () {
    return view('film_actor');
});

Route::get('film_actor'  , 'FilmActorController@index');

// ----FilmCategory----

Route::get('/film_category', function () {
    return view('film_category');
});

Route::get('film_category'  , 'FilmCategoryController@index');

// ----FilmText----

Route::get('/film_text', function () {
    return view('film_text');
});

Route::get('film_text'  , 'FilmTextController@index');

// ----Inventory----

Route::get('/inventory', function () {
    return view('inventory');
});

Route::get('inventory'  , 'InventoryController@index');

// ----Language----

Route::get('/language', function () {
    return view('language');
});

Route::get('language'  , 'LanguageController@index');

// ----Payment----

Route::get('/payment', function () {
    return view('payment');
});

Route::get('payment'  , 'PaymentController@index');

// ----Rental----

Route::get('/rental', function () {
    return view('rental');
});

Route::get('rental'  , 'RentalController@index');

// ----Staff----

Route::get('/staff', function () {
    return view('staff');
});

Route::get('staff'  , 'StaffController@index');

// ----Store----

Route::get('/store', function () {
    return view('store');
});

Route::get('store'  , 'StoreController@index');