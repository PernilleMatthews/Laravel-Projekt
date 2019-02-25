@extends('layout')

@section('content')
<main class="show">
  <center>
    <h1>Redigere rekvirent: {{ $rekvirent->name }}</h1>
  </center>
  <form method="POST" action="/rekvirent/ {{ $rekvirent->id }} " class="form">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
    <ul>
      <li>
        <label for="title">Navn</label>
          <input type="text" class="input" name="name" value="{{ $rekvirent->name }}">
        <span>Rekvirentens navn</span>
      </li>

      <li>
        <label for="description">initialer</label>
          <input type="text" class="input" name="initialer" value="{{ $rekvirent->initialer }}">
        <span>Rekvirentens initialer</span>
      </li>

      <li>
        <label for="rekvirent">Person eller Klasse?</label>
          <select name="type" id="type" class="form-control">
              <option value="Person" {{ $rekvirent->type == 'Person' ? 'selected' : 'Person'}}>Person</option>
              <option value="Klasse" {{ $rekvirent->type == 'Klasse' ? 'selected' : 'Klasse'}}>Klasse</option>
          </select>
        <span>Er rekvireten tilknyttet en klasse eller en individuel person?</span>
      </li>

      <li>
        <input type="submit" class="button is-link" value="Opdater Rekvirent">
        </form>
        <form method="POST" action="/rekvirent/{{ $rekvirent->id }}">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <input type="submit" class="button" value="Slet Rekvirent">
        </form>
      </li>
    </ul>
  </main>
@endsection
