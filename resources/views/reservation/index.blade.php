

@extends('layouts.app')

@section('content')
<main id="content" class="show">
  <center>
  <h1 class="title">Reservationer</h1>
    <table>
      <tr>
          <td><b>Lokale</b></td>
          <td><b>Dato Tid</b></td>
          <td><b>Rekvirent</b></td>
          <td><b>Oprettelses dato</b></td>
          <td><b>Opdaterings dato</b></td>
          <td><b>Oplysninger</b></td>
          <td><b>Rediger</b></td>
      </tr>
          @foreach ($reservationer as $reservation)
                  <tr>
                    <a href="/reservation/{{ $reservation->id }}"></a>
                    <td>{{ $reservation->lokale }}</td>
                    <td>{{ $reservation->datotid }}</td>
                    <td>{{ $reservation->rekvirent }}</td>
                    <td>{{ $reservation->created_at }}</td>
                    <td>{{ $reservation->updated_at }}</td>
                    <td><a href="/reservation/{{ $reservation->id }}"><i class="fas fa-info-circle"></i></a></td>
                    <td><a href="/reservation/{{ $reservation->id }}/edit"><i class="fas fa-edit"></i></a></td>
                  </tr>
          @endforeach
    </table>
  </center>
  </main>
@endsection
