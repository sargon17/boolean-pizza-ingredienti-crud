<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pizze</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


</head>

<body>
    <h1>Ingredents</h1>
    <ul>
        @forelse ( $ingredienti as $ingrediente )
        {{-- @dd($ingrediente) --}}
        <li> <a href="{{ route('ingredienti.show', $ingrediente  )}}">{{ $ingrediente->name }} </a></li>
        @empty
            <li>There are no ingredients</li>
        @endforelse
    </ul>
    <a href="{{ route('ingredienti.create') }}">Aggiungi nuovo ingrediente</a>

</body>

</html>
