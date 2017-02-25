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
    return view('welcome');
});
Route::get('/home', function () { return view('home'); });

Route::get('/cars', 'CarController@show');
Route::get('/cars/create', 'CarController@create');
Route::get('/showAll', 'CarController@showAll');

Route::post('/cars', 'CarController@store');

/*--Footer--------------------------------------*/
Route::get('/impressum',            function () { return view('footer.impressum'); });
Route::get('/datenschutz',          function () { return view('footer.datenschutz'); });
Route::get('/haftungsausschluss',   function () { return view('footer.haftungsausschluss'); });
Route::get('/agb',                  function () { return view('footer.agb'); });
Route::get('/kontakt',              function () { return view('footer.kontakt'); });


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
