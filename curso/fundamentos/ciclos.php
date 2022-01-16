<?php
// CICLO FOR
// la sintaxis es igual que la de JS

for ($i=0; $i < 22; $i++) { 
    echo $i;
}
// CICLO WHILE
// esparecido a la de JS;


while ($a <= 10) {
    echo $a;

    $a++;
}

// CICLO DO WHILE;

$i = 1;

do {
    echo $i . '<br/>';
    $i++;
   
}while($i == 10);

// CICLO FOREACH

$numbers = array(1,2,3,4,5,6,7,8,9);

foreach($numbers as $number){
    echo $number;
}

$amigos = array(
    "edad" => 22,
   "name" => "wilmer", 
    "lastName" => "aular");

    foreach($amigos as $amigo => $value ){
        echo $value;
        echo $dato . ":" . $value;
    }

    // SENTENCIAS BREACK Y CONTINUES;

    $numbers = array(1,2,3,4,5,6,7,8,9);

foreach($numbers as $number){
  // nos permite parar la ejecucion del ciclo
    if($number === 4){
        break;
    }
    // nos permite saltar a la proxima iteracion de ciclo
    if($number === 5){
        continue;
    }
    echo $number;
}



 ?>   