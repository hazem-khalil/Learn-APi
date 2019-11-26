<?php

use Illuminate\Http\Request;

Route::prefix('/v1/')->group(function () {   
    Route::get('people/', 'PeopleController@index');
    Route::post('people/', 'PeopleController@store/');
    Route::get('people/{person}', 'PeopleController@show');
    Route::put('people/{person}', 'PeopleController@update');
    Route::delete('people/{person}', 'PeopleController@destroy');
});


Route::prefix('/v2/')->group(function () {
    Route::get('people/', 'V2\PeopleController@index');
    Route::post('people/', 'V2\PeopleController@store');
    Route::get('people/{person}', 'V2\PeopleController@show');
    Route::put('people/{person}', 'V2\PeopleController@update');
    Route::delete('people/{person}', 'V2\PeopleController@destroy');
});