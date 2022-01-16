<?php

// es una forma de proteger todas nuestras calses
// no podemos acceder a dicha clase a menos que la heredemos;

abstract class PersonaAbstracta {
   public function FunctionSaludo()
   {
      echo "hola";
   }
}

class Panadero extends PersonaAbstracta{

}

$carlos = new Panadero;


$carlos->FunctionSaludo();