@extends('layout')

@section('content')
<main class="show">
  <center><h1>Redigere person</h1></center>
  <form method="POST" action="/person/{{ $person->id }}" class="form">
    {{ method_field('PATCH') }} {{--The browser does not understand the PATCH method, thus we need this work around. --}}
    {{ csrf_field() }}
    <ul>
      <li>
        <label class="label" for="">Navn</label>
            <input type="text" class="input" name="name" value="{{ $person->name }}">
        <span>Personens navn</span>
      </li>

      <li>
        <label class="label" for="">Initialer</label>
            <input type="text" class="input" name="initialer" value="{{ $person->initialer }}">
        <span>Initialer</span>
      </li>

      <li>
        <label class="label" for="">Email</label>
            <input type="text" class="input" name="email" value="{{ $person->email }}">
        <span>Email</span>
      </li>

      <li>
        <label class="label" for="">Telefon</label>
          <input type="number" class="input" name="telefon" value="{{ $person->telefon }}">
      <span>Telefon</span>
      </li>
      <li>
      <input type="submit" class="button is-link" value="Opdater Lokale">
        </form>
        <form method="POST" action="/person/{{ $person->id }}">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
        <input type="submit" value="Slet">
        </form>
  </main>
@endsection
