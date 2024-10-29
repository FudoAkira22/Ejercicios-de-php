<?php
/**
 * Escribe un programa que muestre por consola (con un print) los
 * números de 1 a 100 (ambos incluidos y con un salto de línea entre
 * cada impresión), sustituyendo los siguientes:
 * - Múltiplos de 3 por la palabra "fizz".
 * - Múltiplos de 5 por la palabra "buzz".
 * - Múltiplos de 3 y de 5 a la vez por la palabra "fizzbuzz".
 */


 for($i = 1; $i <= 100; $i++){
    $r = $i % 3;
    $r2 = $i % 5;
    
    if($r==0 && $r2 == 0){
        print"<p> fizzbuzz </p>"; 
    }else{
    if($r==0){
        print"<p> fizz </p>";  
    }elseif($r2 == 0){
        print"<p> buzz </p>";
    }else{
        print"<p> $i </p>";
    }
    }
 }


?>