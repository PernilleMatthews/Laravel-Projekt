<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller

{

    public function index()
    {
        $reservationer = \App\Reservation::all();
        return view('reservation.index', compact('reservationer'));

        $resera = DB::table('reservation')
            ->select('reservation.lokale', 'reservation.datotid', 'reservation.rekvirent')
            ->from('reservation')
            ->orderBy('datotid', asc);
            return view('resera.index', compact('reseras'));
    }


    public function create() {
        return view('reservation.create');
    }

    public function store() {
        {

            Reservation::create(
                request()->validate([
                    'lokale' => ['required'],
                    'datotid' => ['required', 'min: 6'],
                    'rekvirent' => ['required'],
                ]));
            return redirect('/reservation');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        return view('reservation.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        return view('reservation.edit', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Reservation $reservation)
    {
        $reservation->update(request(['lokale', 'datotid', 'rekvirent']));

        return redirect('/reservation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return redirect('/reservation');
    }
}
