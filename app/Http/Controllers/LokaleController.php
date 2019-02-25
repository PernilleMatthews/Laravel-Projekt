<?php

namespace App\Http\Controllers;

use App\Lokale;
use Illuminate\Http\Request;

class LokaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lokaler = Lokale::all();
        return view('lokale.index', compact('lokaler'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lokale.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {

        Lokale::create(
            request()->validate([
                'lokalebetegnelse' => ['required'],
                'w' => ['required', 'min: 1'],
                'h' => ['required', 'min: 1'],
                'projektor' => ['required'],
                'kapacitet' => ['required', 'min: 1'],

            ]));
        return redirect('/lokale');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lokale $lokale)
    {
        return view('lokale.show', compact('lokale'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lokale $lokale)
    {
        return view('lokale.edit', compact('lokale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Lokale $lokale)
    {
        $lokale->update(request(['lokalebetegnelse', 'w', 'h', 'projektor', 'kapacitet']));

        return redirect('/lokale');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lokale $lokale)
    {
        $lokale->delete();

        return redirect('/lokale');
    }

}
