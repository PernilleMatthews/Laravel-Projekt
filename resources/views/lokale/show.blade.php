@extends('layout')

@section('content')
  <main class="show">
  <center>
  <div id="printable">
    <h1 id="name" class="name">Oplysninger om Lokale: {{ $lokale->lokalebetegnelse }}</h1>
      <table>
        <tr>
          <td><b>Lokale</b></td>
          <td><b>Bredde</b></td>
          <td><b>Længde</b></td>
          <td><b>Projektor 1:ja 0:Nej</b></td>
          <td><b>Kapacitet</b></td>
        </tr>
        <tr>
          <td>{{ $lokale->lokalebetegnelse }}</td>
          <td>{{ $lokale->w }}</td>
          <td>{{ $lokale->h }}</td>
          <td>{{ $lokale->projektor }}</td>
          <td>{{ $lokale->kapacitet }}</td>
        </tr>
      </table>
    </div>
      <p><a href="/lokale/">Back</a></p>
      <i class="fas fa-print"><input type="button" onclick="udskriv('printable')" value="Udskriv" /></i>
  </center>
  </main>

@endsection
