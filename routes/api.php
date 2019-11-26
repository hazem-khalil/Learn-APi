<?php

use Illuminate\Http\Request;

Route::get('/people/', 'PeopleController@index');
Route::post('/people/', 'PeopleController@store/');
Route::get('/people/{person}', 'PeopleController@show');
Route::put('/people/{person}', 'PeopleController@update');
Route::delete('/people/{person}', 'PeopleController@destroy');