<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', ['uses' => 'UsersController@Index']);
Route::get('users/create', ['uses' => 'UsersController@Create']);
Route::post('users', ['uses' => 'UsersController@Store']);



/*
Route::get('users', function () {
    $users = [
        '0' => [
            'first_name' => 'Victor',
            'last_name' => 'Angelo',
            'location' => 'Brasil'
        ],
        '1' => [
            'first_name' => 'Paloma',
            'last_name' => 'Alves',
            'location' => 'Brasil'
        ]
    ];

    return $users;
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index');
