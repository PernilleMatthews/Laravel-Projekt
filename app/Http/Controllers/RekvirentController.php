<?php

namespace App\Http\Controllers;

use App\Rekvirent;
use Illuminate\Http\Request;

class RekvirentController extends Controller
{
    public function index()
    {
        $rekvirenter = Rekvirent::all();
        return view('rekvirent.index', compact('rekvirenter'));
    }

    public function create()  {
        return view('rekvirent.create');
    }

    public function store()
    {
        Rekvirent::create(
            request()->validate([
                'name' => ['required', 'min: 2'],
                'initialer' => ['required'],

            ]));
        return redirect('/rekvirent');
    }

    public function show(Rekvirent $rekvirent)
    {
        return view('rekvirent.show', compact('rekvirent'));
    }


    public function edit(Rekvirent $rekvirent)
    {
        return view('rekvirent.edit', compact('rekvirent'));
    }


    public function update(Rekvirent $rekvirent)
    {
        $rekvirent->update(request(['name', 'initialer']));

        return redirect('/rekvirent');
    }

    public function destroy(Rekvirent $rekvirent)
    {
        $rekvirent->delete();

        return redirect('/rekvirent');
    }
}
