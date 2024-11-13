<?php
/*
 * Crea una función que reciba dos cadenas como parámetro (str1, str2)
 * e imprima otras dos cadenas como salida (out1, out2).
 * - out1 contendrá todos los caracteres presentes en la str1 pero NO
 *   estén presentes en str2.
 * - out2 contendrá todos los caracteres presentes en la str2 pero NO
 *   estén presentes en str1.
 */

 function elimiandoCaracteres($str1, $str2){
    $out1 = "";
    $out2 = "";

    for ($i = 0; $i < strlen($str1); $i++) {
        // Si el carácter no está en str2, lo agregamos a out1
        if (strpos($str2, $str1[$i]) === false) {
            $out1 .= $str1[$i];
        }
    }

    for($i = 0; $i < strlen($str2); $i++){
        if(strpos($str1, $str2[$i]) === false){
            $out2 .= $str2[$i];
        }

    }

    echo "$out1 esta es la segunda $out2";
 }

 $str1 = "col";
 $str2 = "sol";
 echo elimiandoCaracteres($str1, $str2);
?>