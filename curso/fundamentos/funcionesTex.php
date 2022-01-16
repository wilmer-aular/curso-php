<?php
// MAS USADAS;
$text = "hola wilmer";
// ayuda a no mostrar etiquetas html en navegador
echo htmlspecialchars($text);
// ayuda a eliminar espacios en blanco
echo trim($text);
// obtener la longitud de la cadena
echo strlen($text);
 // devuelve una parte de la cadena
 echo substr($text, 0, 5);
 // convierte la cadena en mayusculas;
 echo strtoupper($text);
 // convierte la cadena en minusculas;
 echo strtolower($text)
?>