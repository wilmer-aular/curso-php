<?php 

// ARREGLOS 

$dias = array("lunes", "martes", "miercoles");

echo $dias;

//ARREGLOS SINTAXIS MAS NUEVA
$semana = ["lunes", "martes", "miercoles"];
echo $semana[0];

// ARREGLOS ASOCIATIVOS
 
$alex = array("telefono" => "22222", "edad" => 22, "apellido" => "aular","pais"=> "venezuale");

$alex["edad"]= 29;

echo $alex["edad"];

// ARREGLOS MULTIDIMENCINALES

$amigos = array(
    array("alejandro", 22),
    array("wilmer", 29), 
    array("carolina", 23) );

echo $amigos[0][0];

//CONTAR LOS ELEMENTOS DE UN ARREGLO

$meses = array(1,2,3,4,5,6,7,8,9);
// la funcion count devuelve la cantidad de elementos del arreglo
$numberMeses = count($meses);

echo $numberMeses;

// RECORREZ ARRELOS CON FOREACH;

// tiene una estructura muy sencilla.

$numbers = array(1,2,3,4,5,6,7,8,9);

foreach($numbers as $number){
    echo $number;
}
// ORDENAR ARREGLOS

$desordenado = array(1,2,3,4,5,6,7,8,9);
//por defecto ordena de forma ascendente;
// nota si son cadenas de string ordenara de forma alfabetica
// nota el metodo sort y rsort devuelve el mismo arreglo ordenado.

sort($desordenado);

// para ordenar de forma reversa

rsort($desordenado);
?>