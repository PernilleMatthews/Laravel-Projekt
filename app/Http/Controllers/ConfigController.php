<?php

namespace App\Http\Controllers;

use App\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return view ('config');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('config.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $user = new Config;
      $user->name = Input::get('navn');
        if (Input::hasFile('image')) {
          $file=Input::file('image');
          $file->move(public_path(). '/', $file->getClientOriginalName());

          $user->name = $file->getClientOriginalName();
        }
      $user->save();
      return 'canvas saved';

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {

    }

}
