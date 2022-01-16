<?php
//
// UTILIZAMOS REQUIRED PARA PARA TRAER ARCHIVOS MUY IMPORTANTE.
require "funciones.php";
//PARA TRAER UNA SOLA VEZ EL CODIGO
require_once "funciones.php";

$hola = saludos("wilmer");

function suma($num1, $num2){
    return $num1 + $num2;
}

// de esta manera podemos incluir archivos y tener codigos fracmentados.
// podemos usar include cuando el archivo no es muy importante;
include "funciones.php";
////PARA TRAER UNA SOLA VEZ EL CODIGO
include_once "funciones.php";
?>