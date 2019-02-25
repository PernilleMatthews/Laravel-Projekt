<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Person;
use app\User;

class PersonController extends Controller
{

    public function index()
    {
        $personer = Person::all();
        return view('person.index', compact('personer'));
    }

    public function show(Person $person) {

        return view('person.show', compact('person'));
    }

    public function create() {
        return view('person.create');
    }

    public function store() {
        {
            Person::create(
            request()->validate([
                'name' => ['required', 'min: 2'],
                'initialer' => ['required', 'min: 2'],
                'email' => ['required', 'min: 2'],
                'telefon' => ['required', 'min: 6'],
            ]));

            return redirect('/person');
        }
        }

    public function edit(Person $person)
        {
            return view('person.edit', compact('person'));
        }

    public function update(Person $person)
        {
            $person->update(request(['name', 'initialer', 'email', 'telefon']));

            return redirect('/person');
        }

    public function destroy(Person $person)
    {
        $person->delete();

        return redirect('/person');
    }

    }
