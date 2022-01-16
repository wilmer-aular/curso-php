<?php

//LAS CLASES ESTATICAS NO REQUIEREN DE UNA ISTANCIA;

class Cumplanero{
    public static $dia = "4 de marzo";

    public static function saludo($nombre = "wilmer"){
        return "hola , buen dia " . $nombre;
    }
}

echo Cumplanero::saludo();