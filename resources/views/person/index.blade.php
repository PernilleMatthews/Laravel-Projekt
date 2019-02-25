@extends('layouts.app')

@section('content')
<main class="show">
  <center>
    <h1 class="title">Person</h1>
      <table>
        <tr>
          <td><b>Navn</b></td>
          <td><b>Initialer</b></td>
          <td><b>Email</b></td>
          <td><b>Telefonnummer</b></td>
          <td><b>Oplysninger</b></td>
          <td><b>Rediger</b></td>
        </tr>
      @foreach ($personer as $person)
        <tr>
          <td>{{ $person->name  }}</td>
          <td>{{ $person->initialer }}</td>
          <td>{{ $person->email  }}</td>
          <td>{{ $person->telefon }}</td>
          <td><a href="/person/{{ $person->id }}"><i class="fas fa-info-circle"></td>
          <td><a href="/person/{{ $person->id }}/edit"><i class="fas fa-edit"></i></a></td>
        </tr>
      @endforeach
      </table>
    </center>

</main>

@endsection
