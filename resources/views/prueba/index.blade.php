<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

ir a
{{-- <a href="{{ action('pruebaController@edit') }}">CONTACTO</a> --}}
<br>
{{-- <a href="{{ action('pruebaController@create') }}">PERFIL</a> --}}
{{-- <h1>HOLA {{$admin }}</h1> --}}
<ul>
    @foreach($array as $mascota)
    <li>{{$mascota}}</li>
    @endforeach
    </ul>
</body>
</html>