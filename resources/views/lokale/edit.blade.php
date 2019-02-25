@extends('layout')

@section('content')
<main class="show">
  <center><h1>Redigere lokale {{ $lokale->lokalebetegnelse }}</h1></center>

  <form method="POST" action="/lokale/{{ $lokale->id }}" class="form">
    {{ method_field('PATCH') }} {{--The browser does not understand the PATCH method, thus we need this work around. --}}
    {{ csrf_field() }}
    <ul>
      <li>
        <label class="label" for="">Lokale betegnelse</label>
          <input type="text" class="input" name="name" placeholder="name" value="{{ $lokale->lokalebetegnelse }}">
        <span>Lokalets nummer/betegnelse</span>
      </li>

      <li>
        <label class="label" for="w">Bredde</label>
          <textarea name="w" class="textarea">{{ $lokale->w }}</textarea>
        <span>Lokalets Bredde</span>
      </li>

      <li>
        <label class="label" for="h">længde</label>
          <textarea name="h" class="textarea">{{ $lokale->h }}</textarea>
        <span>Lokalets længde</span>
      </li>

      <li>
        <label>Projektor</label>
        <select name="projektor">
            <option value="1">Ja</option>
            <option value="0">Nej</option>
        </select>
      <span>Har lokalet en projektor?</span>
      </li>

      <li>
        <label class="label" for="kapacitet">Kapacitet</label>
          <textarea name="kapacitet" class="textarea">{{ $lokale->kapacitet }}</textarea>
        <span>Hvor mange personer er der plads til i lokalet?</span>
      </li>

      <li>
      <input type="submit" class="button is-link" value="Opdater Lokale">
        </form>
        <form method="POST" action="/lokale/{{ $lokale->id }}">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
        <input type="submit">
        </form>
      </li>
    </ul>
  </main>
@endsection
