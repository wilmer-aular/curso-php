<?php 
declare(strict_types=1);
// LAS DECLARACIONES DE TIPO ESCALAR ES CUANDO AGREGAMOS TIPOS DE DATOS A NUESTRO CODIGO;

function suma(int $numero){
    return $numero + $numero;
}

suma(22);


// DECLARACIONES DE TIPO DE DEVOLUCION;

function resta(int $numero): int{
    return $numero - $numero;
}

$value = resta(22);

//OPERADOR DE NAVE ESPACIAL <=>

// regresa 1 si el valor de la izquierda es mayor que el de la derecha;
// regresa 0 si el valor de ambos lados es igual;
//regresa -1 si el valor de la derecha es mayor que el de la izquierda;

// <  =   >
// 1  0  -1

echo 1<=>1;
