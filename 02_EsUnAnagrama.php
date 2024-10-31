<?php
/*
 * Escribe una función que reciba dos palabras (String) y retorne
 * verdadero o falso (Bool) según sean o no anagramas.
 * - Un Anagrama consiste en formar una palabra reordenando TODAS
 *   las letras de otra palabra inicial.
 * - NO hace falta comprobar que ambas palabras existan.
 * - Dos palabras exactamente iguales no son anagrama.
 */


//Se declaro la funcion anagrama para usar return
 function anagrama($palabra1,$palabra2){


 $letra1 = str_split($palabra1);//Este combierte la varianble en array
 sort($letra1);//Acomoda el array de forma alfabetica
 $palabraOrdenada1 = implode('', $letra1);//Regresa el array a variable

 $letra2 = str_split($palabra2);
 sort($letra2);
 $palabraOrdenada2 = implode('', $letra2);

 $tamañoPalabra = strlen($palabra1);//Da el tamaño de la variable
 $tamañoPalabra2 = strlen($palabra2);


 if($palabra1 != $palabra2){//Compara que no sean la misma palabra
 if($tamañoPalabra == $tamañoPalabra2){//Compara el tamaño de las dos variables
    if($palabraOrdenada1 == $palabraOrdenada2){//Compara que sean la misma palabra las dos
        return true;
    }else{
        return false;
    }
 }else{
    return false;
 }
}else{
    return false;
}

 }
 
echo anagrama("amor","roma");//LLama a la funcion y la retorna
?>