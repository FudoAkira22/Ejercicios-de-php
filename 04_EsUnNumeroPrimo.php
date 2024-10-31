<?php
/*
 * Escribe un programa que se encargue de comprobar si un número es o no primo.
 * Hecho esto, imprime los números primos entre 1 y 100.
 */


 for($i = 2; $i <= 100; $i++){
    $siOno = true;
    for($j = 2; $j < $i; $j++){
    if($i % $j === 0){
        $siOno = false;
        break;
    }
    }
    if($siOno){
        print $i.' es primo <br>';
    }
 }
?>