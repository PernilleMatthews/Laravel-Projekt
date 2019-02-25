@extends('layout')

@section('content')
<main class="config show">
  {{-- <div class="card">
    <div>
      <h3>Drag the tables around (blue squares in the grid)</h3>
      <h4>Du Konfigurere nu lokale: UVx.x.x.x's </h4>
      <h4></h4>
      <canvas id="canvas" width=350 height=300  style="border: 1px solid #394263;"></canvas>
      <br>
      <div><button id="save">Finish Configuration</button></div>
      <div>Edit Configuration <input type="file" id="load"></div>
    </div>
  </div> --}}

  <form method="POST" action="/config" class="form" enctype="multipart/form-data">
  {{ csrf_field() }}
    <ul>
      <li>
        <label for="lokalebetegnelse">Lokale</label>
          <input type="text" maxlength="100" class="input" {{ $errors->has('lokale') ? 'is-danger' : '' }} name="lokale" value="{{ old('lokale') }}">
        <span>Hvilket lokale vil du konfigurere?</span>
      </li>

      <li>
        <label for="name">name</label>
          <textarea name="rekvirent" maxlength="100" class="textarea"  {{ $errors->has('rekvirent') ? 'is-danger' : '' }}  >{{ old('rekvirent') }}</textarea>
        <span>Navnet på konfigurationen</span>
      </li>

      <li>
        <label for="image">Konfiguration</label>
          <canvas id="canvas" width=350 height=300  style="border: 1px solid #394263;"></canvas>
        <span>Lokalets Konfiguration</span>
      </li>

        <input type="hidden" name="_token" value="{{csrf_token()}}">

      <li>
        <input type="submit" name="submit" value="Opret Konfiguration.." >
      </li>
    </ul>
  </form>

  {{-- @if ($errors->any())
    <div class="notification is-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div> --}}

</main>
<script src="{{ URL::to('js/config.js')}}" charset="utf-8"></script>
<script src="{{ URL::to('js/canvas_to_data.js')}}" charset="utf-8"></script>
@endsection
