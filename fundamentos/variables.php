<?php
//VARIABLES.
//las variables en php se realizan con la sintaxi de dolar: 
// deberian empezar en mayusculas, no deben llevar espacio ni deben llevar caracteres especiales. 
// y son sencibles a mayusculas.
$name = "Esto es una variable";

echo $name;
//CONSTANTES

//  se llama a la funcion define que recibe 2 parametros, el nombre de la constante
// y el value de la misma.
// es buena practica usar MAYUSCULAS para las constantes

define("PI", 3.14);

echo PI;
  

?>