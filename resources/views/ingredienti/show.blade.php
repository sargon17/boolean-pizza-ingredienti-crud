<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- @dd($ingrediente); --}}
    <h1>{{ $ingrediente->name }}</h1>
    <a href="{{ route('ingredienti.edit', $ingrediente->id)  }}"> modifica </a>
    <form action="{{ route('ingredienti.destroy', $ingrediente->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Cancella Pizza</button>
    </form>
</body>
</html>
