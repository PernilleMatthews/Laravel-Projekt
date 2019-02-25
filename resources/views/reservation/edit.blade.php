@extends('layout')

@section('content')
<main class="show">
  <center><h1>Redigere reservation til lokale: {{ $reservation->lokale }}</h1></center>
  <form method="POST" action="/reservation/{{ $reservation->id }}" class="form">
    {{ method_field('PATCH') }} {{--The browser does not understand the PATCH method, thus we need this work around. --}}
    {{ csrf_field() }}
    <ul>
      <li>
        <label for="title">Lokale</label>
          <input type="text" class="input" name="lokale" value="{{ $reservation->lokale }}">
        <span>Rekvirentens navn</span>
      </li>

      <li>
        <label class="label" for="datotid">Dato-tid</label>
          <input type="text" class="input" name="datotid" value="{{ $reservation->datotid }}">
        <span>Dato & Klokkeslet</span>
      </li>

      <li>
        <label class="label" for="rekvirent">Rekvirent</label>
          <input type="text" class="input" name="rekvirent" value="{{ $reservation->rekvirent }}">
        <span>Tilknyt en anden rekvirent</span>
      </li>
      <li>
          <input type="submit" class="button is-link" value="Opdater reservation">
        </form>
        <form method="POST" action="/reservation/{{ $reservation->id }}">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
        <input type="submit" class="button" value="Slet reservation">
        </form>
      </li>
    </ul>
</main>
@endsection
