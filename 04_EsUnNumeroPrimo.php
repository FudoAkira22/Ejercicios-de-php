<?php
/*
 * Escribe un programa que se encargue de comprobar si un número es o no primo.
 * Hecho esto, imprime los números primos entre 1 y 100.
 */


 for($i = 2; $i <= 100; $i++){
    $siOno = true;//Este reinicia el valor de la variable

    for($j = 2; $j < $i; $j++){//Este da divisores menores a la variable $i
        
        //Este bsuca un diviso que no es primo
        if($i % $j === 0){
        $siOno = false;//le da este valor a la variable para que no entre en el if
        break;//Si lo encuentra sale del bucle
    }
    }

    if($siOno){//Si es true imprime si no no
        print $i.' es primo <br>';
    }
 }
?>