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

Route::get('/cars', 'CarController@show');
Route::get('/cars/create', 'CarController@create');
Route::post('/cars', 'CarController@store');
Route::get('/pushTest', function () {
    return view('welcome');
});

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
