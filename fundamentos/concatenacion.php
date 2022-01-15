<?php
// a diferencia de js en php se concatena con el punto(.)

$nombre= "wilmer";
$apellido = "aular";

$fullName = $nombre . " " . $apellido;

echo $fullName;

//

$name = "wilmer";

$name .= " aular";

echo $name;

// TEMPLATE STRING

$fullName = "wilmer, $apellido!"

?>