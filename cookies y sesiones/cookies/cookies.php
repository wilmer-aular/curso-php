<?php 
// son pequeños archivos que crea el servidor en la computadora de los usuarios para guardar pequeña informacion que nosotros queramos almacenar;
// de esta forma cuando el usuario vualva a cargar la pagina podamos mostrar ciertas preferencias; ejemplo pueda cargar un tamaño de fuente que el usuario establecio;

setcookie("font-size", "50px", time() - 60 * 60 * 24 * 30, "/");

// las cookies expieran. no se pueden cerrar solo expirandolas;
// en las cookies solo pueden almacenar 4 mb de texto

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cookie Seteada</h1>
</body>

</html>