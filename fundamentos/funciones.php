<?php
// FUNTION BAR_DUMP()
// NOS PERMITE PARA CONOCER EL VALOR, TIPO DE DATO Y NUMERO DE CARACTERES DE LAS VARIABLES;
//PODEMOS UTILIZARLOS EN ARREGLOS
$var = 22;
var_dump($var);

//FUNTION PRINYT_R()
//PERMITE CONOCER LOS TIPOS DE DATOS;
// MUESTRA INFORMACION LEGIBLE.

$var2 = 22;

print_r($var2);

// FUNCIONES : 
// sintaxis:

function saludos($nombre= "jose"){
    return "hola " . $nombre;
};

$hola = saludos("wilmer");

// FUNCION DIE()
// NOS PERMITE PARAR POR COMPLETO LA EJECUCION DEL PROGRAMA

die()

// ESTO NO SE EJECUTARA;

?>