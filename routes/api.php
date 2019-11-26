<?php

use Illuminate\Http\Request;

Route::get('/people/{person}', 'PeopleController@show');