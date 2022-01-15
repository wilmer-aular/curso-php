<?php
// CONDICIONAL IF, ELSE, ELSE IF;
//sintaxis igual que la de js

//xor evalua que se cumpla una y solo una condicion

$condicion = true;

if($condicion){
 // 
}else if(!$condicion){
//
}else{
//
}

// CONDICIONAL SWITCH 
$mes = "diciembre";
switch($mes){
    case "enero":
        echo "feliz año";
        break;
    case "diciembre":
        echo "feliz navidad";
        break;
    default :
        echo "buen año";
        break;

}

// OPERADOR TERNARIO;
// la sintaxis es parecida a la de JS

// la funcion isset identifica si una variable tiene un valor o no: devuelve true o false;

$edad = 22;

echo ($edad > 18) ? "mayor de edad" : "menor de edad"

?>