<?php

require_once("clases.php");

//public
//pueden ser accedidos desde cualquier parte, ya sea dentro o fuera de la clase.
//protected
// pueden ser accedidos solo desde dentro de la clase y otras clases que hereden, pero no fuera de esta;
//private
// solo pueden ser accedidos desde dentro de la clase en la que fueron creados;
// las clases no heredaras atributos o metodos que sean privados.


class Estudiante extends Persona {

 public $carrera;
 protected $correo;
 private $dni;

    function __construct(string $n, int $e, string $p, string $c)
    {
        // parent::__construct($n, $e, $p);
        $this->nombre = $n;
        $this->edad = $e;
        $this->pais= $p;
        $this->carrera = $c; 
    }
} 

$jose = new Estudiante("jose",33, "argentina", "ingeniero civil");

$jose-> mostraInformacion();

echo $jose->carrera;