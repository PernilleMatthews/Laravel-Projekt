@extends('layout')

@section('content')
<main class="show">
  <center>
  <div id="printable">
    <h1 id="name" class="name">Oplysinger om rekvirent: {{ $rekvirent->name }}</h1>
      <table>
        <tr>
          <td><b>Navn</b></td>
          <td><b>Initialer</b></td>
          <td><b>Type</b></td>
        </tr>
        <tr>
          <td>{{ $rekvirent->name }}</td>
          <td>{{ $rekvirent->initialer }}</td>
          <td>{{ $rekvirent->type }}</td>
        </tr>
      </table>
    </div>
      <p><a href="/rekvirent/">Back</a></p>
      <i class="fas fa-print"><input type="button" onclick="udskriv('printable')" value="Udskriv" /></i>
  </center>
</main>
@endsection
