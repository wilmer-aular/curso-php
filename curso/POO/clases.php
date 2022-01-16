<?php

// DECLARACION DE CLASES

class Persona {
    public $edad;
    public $nombre;
    public $pais;

    public function mostraInformacion(){
        echo "hola mundo";
    }
}

$carlos = new Persona();

$carlos->nombre = "carlos aular";
$carlos->edad = 22;
$carlos->pais = "venezuela";

$carlos->mostraInformacion();