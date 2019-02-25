@extends('layouts.app')

@section('content')
<main class="show">
  <center>
  <h1 class="title">Lokaler</h1>
    <table>
      <tr>
        <td><b>Lokale</b></td>
        <td><b>Bredde</b></td>
        <td><b>Længde</b></td>
        <td><b>Projektor</b></td>
        <td><b>Kapacitet</b></td>
        <td><b>Oprettet</b></td>
        <td><b>Opdateret</b></td>
        <td><b>Oplysninger</b></td>
        <td><b>Rediger</b></td>
      </tr>
      @foreach ($lokaler as $lokale)
      <tr>
        <td>{{ $lokale->lokalebetegnelse }}</td>
        <td>{{ $lokale->w }}</td>
        <td>{{ $lokale->h }}</td>
        <td>{{ $lokale->projektor }}</td>
        <td>{{ $lokale->kapacitet }}</td>
        <td>{{ $lokale->created_at }}</td>
        <td>{{ $lokale->updated_at }}</td>
        <td><a href="/lokale/{{ $lokale->id }}"><i class="fas fa-info-circle"></i></td>
        <td><a href="/lokale/{{ $lokale->id }}/edit"><i class="fas fa-edit"></i></a></td>
      </tr>
    @endforeach
    </table>
  </center>
</main>
@endsection
