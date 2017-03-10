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

Route::get('home', function () { return view('filter'); });
//Route::get('login',function () { return view('auth/login'); });
Route::post('login/post', 'Auth/LoginController@authenticate');
Route::get('/', function () { return view('filter'); });

/*--Header--------------------------------------*/

Route::get('logout', function () {
    Auth::logout();
    return view('auth/logout');
})->middleware("auth");

/*--Main--------------------------------------*/

Route::get('car/show',             'CarController@show');
Route::get('car/create',           'CarController@create')->middleware("auth");
Route::get('car/showAll',          'CarController@showAll');
Route::get('car/showbyid/{id}',    'CarController@showById')->middleware("auth");
Route::post('post_filter',         'CarController@filter')->middleware("auth");
Route::post('car/store',           'CarController@store')->middleware("auth");


Route::get('user/showAll',         'UserController@showAll')->middleware("auth");
Route::get('user/showAccount',     'UserController@showAccount')->middleware("auth");

/*--Footer--------------------------------------*/
Route::get('impressum',            function () { return view('footer.impressum'); });
Route::get('datenschutz',          function () { return view('footer.datenschutz'); });
Route::get('haftungsausschluss',   function () { return view('footer.haftungsausschluss'); });
Route::get('agb',                  function () { return view('footer.agb'); });
Route::get('kontakt',              function () { return view('footer.kontakt'); });

/*--Test--------------------------------------*/
Route::get('/sparkpost', function () {
    Mail::send('emails.test', [], function ($message) {
        $message
            ->from('noreply@nenc.we-host.de', 'NENC')
      ->to('niklas.heer@gmail.com', 'Niklas')
      ->subject('From SparkPost with ❤');
  });
});
