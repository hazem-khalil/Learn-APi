<?php

use Illuminate\Http\Request;

Route::get('/people/', 'PeopleController@index');
Route::get('/people/{person}', 'PeopleController@show');