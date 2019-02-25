@extends('layout')

@section('content')
<main class="show">
  <center>
  <div id="printable">
    <h1 id="name" class="name">Reservation af lokale: {{ $reservation->lokale }}</h1>
      <table>
        <tr>
            <td><b>Lokale</b></td>
            <td><b>Dato Tid</b></td>
            <td><b>Rekvirent</b></td>
            <td><b>Oprettelses dato</b></td>
            <td><b>Opdaterings dato</b></td>
        </tr>

        <tr>
            <td>{{ $reservation->lokale }}</td>
            <td>{{ $reservation->datotid }}</td>
            <td>{{ $reservation->rekvirent }}</td>
            <td>{{ $reservation->created_at }}</td>
            <td>{{ $reservation->updated_at }}</td>
        </tr>
    </table>
  </div>
    <p><a href="/reservation/">Back</a></p>
    <i class="fas fa-print"><input type="button" onclick="udskriv('printable')" value="Udskriv" /></i>
  </center>
  </main>
@endsection
