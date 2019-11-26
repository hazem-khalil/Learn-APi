<?php

namespace App\Http\Controllers\V2;

use App\Person;
use Illuminate\Http\Request;
use App\Http\Controllers\PeopleController as NewController;
use App\Http\Controllers\Controller;
use App\Http\Requests\PersonRequest;
use App\Http\Resources\V2\PersonResource;
use App\Http\Resources\V2\PersonResourceCollection;

class PeopleController extends Controller
{   
    /**
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
    public function store(PersonRequest $request)
    {
        $person = (new NewController)->store(new PersonRequest);
        return new PersonResource($person);
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
     * assume the user will enter valid date until now
     * @param  Person  $person, Request $request
     * @return PersonResource
     */
    public function update(Person $person, Request $request): PersonResource
    {
        $person->update($request->all());
        return new PersonResource($person);
    }

    /**
     * @param  Person  $person
     * @return String
     */
    public function destroy(Person $person)
    {
        $person->delete($person);
        return "The Person deleted successfully";
    }

}
