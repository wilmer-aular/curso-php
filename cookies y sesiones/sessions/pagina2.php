<?php

session_start();

if($_SESSION){

    $nombre = $_SESSION['nombre'];
    echo "<h1>hola, $nombre</h1>";

} else {
    echo "No has iniciado session";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina2</title>
</head>

<body>
    <h1>Pagina 2</h1>

    <a href="cerrarSesion.php">Cerrar sesion</a>
</body>

</html>