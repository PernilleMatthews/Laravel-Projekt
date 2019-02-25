@extends('layouts.app')

@section('content')
<main class="show">
<center><h1>Opret nyt lokale</h1></center>
<form method="POST" action="/lokale" class="form">
{{ csrf_field() }}
    <ul>
      <li>
        <label for="lokalebetegnelse">Lokalebetegnelse</label>
          <input type="text" class="input" {{ $errors->has('lokalebetegnelse') ? 'is-danger' : '' }} name="lokalebetegnelse" value="{{ old('lokalebetegnelse') }}">
        <span>Hvilket lokale opretter du?</span>
      </li>

      <li>
        <label for="w">Bredde</label>
          <input type="number" class="input" {{ $errors->has('w') ? 'is-danger' : '' }} name="w" value="{{ old('w') }}">
        <span>Definer lokalets bredde</span>
      </li>

      <li>
        <label for="h">Længde</label>
          <input type="number" class="input" {{ $errors->has('h') ? 'is-danger' : '' }} name="h" value="{{ old('h') }}">
        <span>Definer lokalets længde</span>
      </li>

      <li>
        <label>Projektor</label>
          <select name="projektor">
              <option value="1">Ja</option>
              <option value="0">Nej</option>
          </select>
        <span>Har lokalet en projekt? 1: Ja 0: Nej</span>
      </li>

      <li>
        <label for="kapacitet">Kapacitet</label>
          <input type="number" class="input" {{ $errors->has('kapacitet') ? 'is-danger' : '' }} name="kapacitet" value="{{ old('kapacitet') }}">
        <span>Hvor mange mennesker er der plads til i lokalet?</span>
      </li>

      <li>
        <input type="submit" value="Opret lokalet..." >
      </li>
    </ul>
</form>
    @if ($errors->any())
        <div class="notification is-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</main>
@endsection
