<?php
/*
 * Crea un programa que invierta el orden de una cadena de texto
 * sin usar funciones propias del lenguaje que lo hagan de forma automática.
 * - Si le pasamos "Hola mundo" nos retornaría "odnum aloH"
 */

 $palabra = "Hola mundo";

 function extraer($palabra){
    $invertido = "";
    for ($i = strlen($palabra) - 1; $i >= 0; $i--) {
        $invertido .= $palabra[$i];
    }
    return $invertido;
 }

 $palabraInvertida = extraer($palabra);

 print $palabraInvertida;
?>