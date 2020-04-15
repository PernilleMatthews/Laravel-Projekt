
@extends('layouts.app')

@section('content')
<main class="config show">
<center><h1>Opret en ny reservation</h1></center>

  <form method="POST" action="/reservation" class="form">
  {{ csrf_field() }}
    <ul>
        <li>
            <label for="lokale">Lokale</label>
            <select name="lokale" id="lokale">
                @foreach (App\Lokale::all() as $lokale)
                    <option>{{ $lokale->lokalebetegnelse }}</option>
                @endforeach
            </select>
            <span>Hvilket lokale vil du reservere?</span>
        </li>


        <li>
            <label for="datotid">Dato-tid</label>
            <input type = "datetime-local" maxlength="100" name= "datotid" id="datotid"  {{ $errors->has('datotid') ? 'is-danger' : '' }} {{ old('datotid') }}>
            <span>Hvornår vil du gerne reservere lokalet?</span>
        </li>
        <li>
            <label for="rekvirent">Rekvirent</label>
            <select name="rekvirent" id="rekvirent">
                @foreach (App\Rekvirent::all() as $rekvirent)
                    <option>{{ $rekvirent->initialer }}</option>
                @endforeach
            </select>
            <span>Hvilken rekvirent vil reservere lokalet?</span>
        </li>
        <li>
            <input type="submit" value="Reserver Lokalet.." >
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
<script src="{{ URL::to('js/config.js')}}" charset="utf-8"></script>
<script src="{{ URL::to('js/canvas_to_data.js')}}" charset="utf-8"></script>
@endsection
