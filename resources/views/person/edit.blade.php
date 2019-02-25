@extends('layout')

@section('content')

    <h1>Redigere person</h1>
    {{--/rekvirent/ {{rekvirent->id}} this gets the id of the project you click on--}}
    <form method="POST" action="/person/{{ $person->id }}" styles="margin-bottom: 1em;">
        {{ method_field('PATCH') }} {{--The browser does not understand the PATCH method, thus we need this work around. --}}
        {{--PATCH means update, --}}
        {{ csrf_field() }}

        <div class="field">
            <label class="label" for="">Navn</label>

            <div class="control">
                <input type="text" class="input" name="name" value="{{ $person->name }}">

            </div>
        </div>

        <div class="field">
            <label class="label" for="">Initialer</label>

            <div class="control">
                <input type="text" class="input" name="initialer" value="{{ $person->initialer }}">

            </div>
        </div>

        <div class="field">
            <label class="label" for="">Email</label>

            <div class="control">
                <input type="text" class="input" name="email" value="{{ $person->email }}">

            </div>
        </div>

        <div class="field">
            <label class="label" for="">Telefon</label>

            <div class="control">
                <input type="number" class="input" name="telefon" value="{{ $person->telefon }}">

            </div>
        </div>


                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-link">Opdatere person</button>
                        </div>
                    </div>
    </form>

    <form method="POST" action="/person/{{ $person->id }}">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <div class="field">

            <div class="control">
                <button type="submit" class="button">Slet person</button>
            </div>
        </div>
    </form>
@endsection
