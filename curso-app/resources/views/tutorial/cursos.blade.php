<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Curso de PHP</h1>
    <ul>
        <!--Blade usa la sintaxis del bigote para mostrar -->
        @foreach($cursos as $curso)
        <li> {{$curso}}</li>
        @endforeach
    </ul>
    @if($cursos['curso1'] === 'PHP')
        Mi curso favorito es PHP

    @elseif($cursos['curso2'] === 'VueJS')
    Mi curso favorito es VueJS
    @else
    Mi curso Favorito es JavaScript
        @endif
</body>

</html>