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

Route::get('cars/create',   function () { return view('cars.create'); });
Route::get('cars/show',     function () { return view('cars.index'); });
Route::get('home',          function () { return view('filter'); });
Route::get('/',             function () { return view('filter'); });

Route::get('cars/showAll',          'CarController@showAll');
Route::get('cars/showbyid/{id}',    'CarController@showById');
Route::post('post_filter',          'CarController@filter');
Route::post('cars/store',           'CarController@store');

/*--Footer--------------------------------------*/
Route::get('impressum',            function () { return view('footer.impressum'); });
Route::get('datenschutz',          function () { return view('footer.datenschutz'); });
Route::get('haftungsausschluss',   function () { return view('footer.haftungsausschluss'); });
Route::get('agb',                  function () { return view('footer.agb'); });
Route::get('kontakt',              function () { return view('footer.kontakt'); });


/*
 * /                - homepage
 * /users           - list all users
 * /users/{user}    - show user with id
 * /users/create    - create new user
 *
 * /cars            - list all cars
 * /cars/{car}      - show detailed info about car
 * /cars/create     - create new car
 *
 * /contact         - display contact form
 * /login           - login form
 */
