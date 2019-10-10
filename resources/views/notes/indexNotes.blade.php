<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>INDEX NOTAS</h1>
    <ul>
    <li><a href="{{ action('NotesController@create') }}">AGREGAR</a>
            </li>
        <li>ELIMINAR</li>
        <li>EDITAR</li>

    </ul>
    <ul>
    @foreach($notas as $nota)
    <li>{{$nota->id}}</li>
    <li>{{$nota->description}}</li>
    <li>{{$nota->created_at}}</li>
    @endforeach
    </ul>
</body>
</html>