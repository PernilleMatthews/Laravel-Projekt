@extends('layouts.app')

@section('content')
<main class="show">
    <center><h1>Opret ny rekvirent</h1></center>

    <form method="POST" action="/rekvirent" class="form">
    {{ csrf_field() }}
      <ul>
        <li>
          <label for="title">Navn</label>
            <input type="text" class="input" {{ $errors->has('name') ? 'is-danger' : '' }} name="name" value="{{ old('name') }}">
          <span>Rekvirentens navn</span>
        </li>

        <li>
          <label for="description">initialer</label>
            <textarea name="initialer"  class="textarea"  {{ $errors->has('initialer') ? 'is-danger' : '' }}  >{{ old('initialer') }}</textarea>
          <span>Rekvirentens initialer</span>
        </li>

        <li>
          <label for="rekvirent">Person eller Klasse?</label>
            <select name="type">
                <option value="Klasse">Klasse</option>
                <option value="Person">Person</option>
            </select>
          <span>Er rekvireten tilknyttet en klasse eller en individuel person?</span>
        </li>

        <li>
          <input type="submit" value="Opret Rekvirent" >
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
