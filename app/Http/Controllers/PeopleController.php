<?php

namespace App\Http\Controllers;

use App\Person;
use App\Http\Resources\PersonResource;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * @param  Person  $person
     * @return PersonResource
     */
    public function show(Person $person): PersonResource
    {
        return new PersonResource($person);
    }
}
