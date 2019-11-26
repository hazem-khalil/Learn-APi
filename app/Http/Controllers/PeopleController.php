<?php

namespace App\Http\Controllers;

use App\Person;
use App\Http\Requests\PersonRequest;
use App\Http\Resources\PersonResource;
use App\Http\Resources\PersonResourceCollection;

class PeopleController extends Controller
{
    /**
     * @param  Person  $person
     * @return PersonResourceCollection
     */
    public function index(): PersonResourceCollection
    {
        return new PersonResourceCollection(Person::paginate());
    }

    /**
     * @param  Person  $person
     * @return PersonResource
     */
    public function show(Person $person): PersonResource
    {
        return new PersonResource($person);
    }

    /**
     * @param  Person  $person
     * @return PersonResourceCollection
     */
    public function store(PersonRequest $request)
    {
        $person = Person::create(request()->all());
        return new PersonResource($person);
    }
}
