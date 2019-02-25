@extends('layouts.app')
@section('content')
  <main class="main">
    <div class="main-header">
      <div class="main-header_heading">
        Velkommen {{ Auth::user()->name }}
      </div>
    </div>
    <div class="main-overview">
      <div class="overviewcard">
          <div class="icon">Slettede Reservationer</div>
          <div class="text"><i class="far fa-trash-alt"></i></div>
      </div>
      <div class="overviewcard">
          <div class="icon">Nylige Reservationer</div>
          <div class="text"><i class="fas fa-calendar-check check-1"></i></div>
      </div>
      <div class="overviewcard">
          <div class="icon">Index</div>
          <div class="text">Card</div>
      </div>
      <div class="overviewcard">
          <div class="icon">Index</div>
          <div class="text">Card</div>
      </div>
    </div>
    <div class="main-cards">
      <div class="card">
            <table>
              <tr>
                  <td><b>Lokale</b></td>
                  <td><b>Reservations dato</b></td>
                  <td><b>Rekvirent</b></td>
              </tr>
              @foreach (App\Reservation::all() as $reservation)
                  <tr>
                      <td>{{ $reservation->lokale }}</td>
                      <td>{{ $reservation->datotid }}</td>
                      <td>{{ $reservation->rekvirent }}</td>
                  </tr>
              @endforeach
          </table>
      </div>
      <div class="card">
        Right Card Top
      </div>
      <div class="card">
          Right Card Bottom
      </div>
    </div>
  </main>
@endsection
