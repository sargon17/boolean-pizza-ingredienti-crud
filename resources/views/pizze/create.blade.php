<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('pizze.store') }}" method="POST">
        @csrf
        <label for="nome_pizza">Inserisci il nome della pizza:</label>
        <input type="text" name="nome_pizza" placeholder="Nome Pizza">
        <div class="form-group">
        <h3>Inngredienti</h3>
        @foreach ($ingredienti as $ingrediente)
            <input type="checkbox" value="{{$ingrediente->id}}" name="ingredienti[]"
            {{ in_array($ingrediente->id, old("ingredienti", [])) ? "checked" : "" }}/>
            <label class="mr-3">{{$ingrediente->name}}</label>
        @endforeach
    </div>


        <button type="submit">salva pizza</button>
    </form>
</body>

</html>
