<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<h1 class="title">Personer</h1>
<ul>
    @foreach ($personer as $person)
        <li>
            <a href="/person/{{ $person->id }}"> {{--{-- create clickable projects--}--}}
            {{ $person->name }} {{ $person->initialer }}  {{ $person->email }} {{ $person->telefon }}</li>

        <p>
            <a href="/person/{{ $person->id }}/edit"><i class="fas fa-edit"></i></a>
        </p>

        </a>
    @endforeach

</ul>
</body>
</html>
