<?php
declare(strict_types=1);
// DECLARACION DE CLASES

class Persona2 {
    public $edad;
    public $nombre;
    public $pais;

    function __construct(string $n, int $e, string $p)
    {
        $this->nombre = $n;
        $this->edad = $e;
        $this->pais= $p;
        
    }

    public function mostraInformacion(){
        echo $this->nombre . " " . $this->edad . " " . $this->pais;
    }
}

$carlos = new Persona2("wilmer", 22, "venezuela");


$carlos->mostraInformacion();