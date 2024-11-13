<?php
/*
 * Crea un programa se encargue de transformar un número
 * decimal a binario sin utilizar funciones propias del lenguaje que lo hagan directamente.
 */

 function decimalABinario($numero){
    $binario = "";

    while($numero > 0){
        $residuo = $numero % 2; 
        $binario = $residuo . $binario; 
        $numero = intdiv($numero, 2);
    }

        if($binario === ""){
        $binario = 0;
        }

    return $binario;
 }

 $numero = 16;

 echo decimalABinario($numero);
?>