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

/*
 * /                - homepage
 * /users           - list all users
 * /users/{user}    - show user with id
 * /users/create    - create new user
 *
 * /cars/showAll    - list all cars
 * /cars/{car}      - show detailed info about car
 * /cars/create     - create new car
 *
 * /contact         - display contact form
 * /login           - login form
 */

//Register the typical authentication routes for an application. 
//e.g. /register | /login | password/reset ...
Auth::routes();

//Route::get('/home', 'HomeController@index');


Route::get('home', function () { return view('filter'); });
//Route::get('login',function () { return view('auth/login'); });
Route::post('login/post', 'Auth/LoginController@authenticate');
Route::get('/', function () { return view('filter'); });

/*--Header--------------------------------------*/

Route::get('logout', function () {
    Auth::logout();
    return view('logout');
})->middleware("auth");

/*--Main--------------------------------------*/

Route::get('cars/show',             'CarController@show');
Route::get('cars/create',           'CarController@create')->middleware("auth");
Route::get('cars/showAll',          'CarController@showAll');
Route::get('cars/showbyid/{id}',    'CarController@showById')->middleware("auth");
Route::post('post_filter',          'CarController@filter')->middleware("auth");
Route::post('cars/store',           'CarController@store')->middleware("auth");

/*--Footer--------------------------------------*/
Route::get('impressum',            function () { return view('footer.impressum'); })->middleware("auth");;
Route::get('datenschutz',          function () { return view('footer.datenschutz'); });
Route::get('haftungsausschluss',   function () { return view('footer.haftungsausschluss'); });
Route::get('agb',                  function () { return view('footer.agb'); });
Route::get('kontakt',              function () { return view('footer.kontakt'); });
