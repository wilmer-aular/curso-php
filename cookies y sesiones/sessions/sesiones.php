<?php 
// es una variable que persiste en todas las paginas;

session_start();

$_SESSION['nombre'] = "Wilmer";

// esto reemplazara la session
//$_SESSION['nombre'] = "Arturo";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sessions</title>
</head>

<body>
    <h1>Pagina de Inicio</h1>
    <h2>hola <?php echo $_SESSION['nombre'] ?></h2>
    <p></p>
    <a href="pagina2.php">ir a pagina 2</a>
</body>

</html>