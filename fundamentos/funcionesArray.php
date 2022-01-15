<?php
$amigo = array("telefono"=> 222222, "edad"=> 22);
$semana=array("lunes", "martes", "miercoles");
// extrare elementos de un arreglo asociativo

extract($amigo);

echo $telefono;
// permite es extrare el elemento al final de un arreglo;

$miercoles = array_pop($semana);

// convierte un array en una cadena, y los separa por el signo que le pases;

join(", " , $semana);

//sort();
//


?>