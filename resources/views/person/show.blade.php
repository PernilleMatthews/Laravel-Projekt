@extends('layout')

@section('content')

    <h1 class="name">{{ $person->name }}</h1>
    <div class="content">{{ $person->initialer }}</div>
    <div class="content">{{ $person->email }}</div>
    <div class="content">{{ $person->telefon }}</div>


    <p>
        <a href="/person/">Back</a>
    </p>

    <p>
        <i class="fas fa-print"><input type="button" onclick="udskriv('printable')" value="Udskriv" /></i>
    </p>
@endsection
