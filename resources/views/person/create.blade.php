@extends('layouts.app')

@section('content')
<main class="show">
    <center><h1>Opret en ny person</h1></center>
    <form method="POST" action="/person" class="form">
    {{ csrf_field() }}
      <ul>
        <li>
          <label class="label" for="">Navn</label>
              <input type="text" class="input" {{ $errors->has('name') ? 'is-danger' : '' }} name="name" value="{{ old('name') }}">
          <span>Personens navn</span>
        </li>

        <li>
          <label class="label" for="">Initialer</label>
              <textarea name="initialer"  class="textarea"  {{ $errors->has('initialer') ? 'is-danger' : '' }}  >{{ old('initialer') }}</textarea>
          <span>Personens initialer</span>
        </li>

        <li>
          <label class="label" for="">Email</label>
              <input type="text" class="input" {{ $errors->has('email') ? 'is-danger' : '' }} name="email" value="{{ old
              ('email') }}">
          <span>Personens Email</span>
        </li>

        <li>
          <label class="label" for="">Telefon</label>
              <input type="text" class="input" {{ $errors->has('telefon') ? 'is-danger' : '' }} name="telefon" value="{{ old
              ('telefon') }}">
          <span>Personens Telefonnummer</span>
        </li>
        <li>
          <input type="submit" value="Opret Person" >
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
  </form>
{{-- <form method="POST" action="/person">
    {{ csrf_field() }}


   <div class="field">
        <label class="label" for="">Navn</label>

        <div class="control">
            <input type="text" class="input" {{ $errors->has('name') ? 'is-danger' : '' }} name="name" value="{{ old('name') }}">
        </div>
    </div>

    <div class="field">
        <label class="label" for="">Initialer</label>

        <div class="control">
            <textarea name="initialer"  class="textarea"  {{ $errors->has('initialer') ? 'is-danger' : '' }}  >{{ old('initialer') }}</textarea>
        </div>
    </div>

    <div class="field">
        <label class="label" for="">Email</label>

        <div class="control">
            <input type="text" class="input" {{ $errors->has('email') ? 'is-danger' : '' }} name="email" value="{{ old
            ('email') }}">
        </div>
    </div>

    <div class="field">
        <label class="label" for="">Telefon</label>

        <div class="control">
            <input type="text" class="input" {{ $errors->has('telefon') ? 'is-danger' : '' }} name="telefon" value="{{ old
            ('telefon') }}">
        </div>
    </div>

    <div>
        <button type="submit">Opret person</button>
    </div>

    @if ($errors->any())
        <div class="notification is-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif
</form> --}}
</main>
@endsection
