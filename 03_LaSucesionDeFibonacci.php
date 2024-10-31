<?php
/*
 * Escribe un programa que imprima los 50 primeros números de la sucesión
 * de Fibonacci empezando en 0.
 * - La serie Fibonacci se compone por una sucesión de números en
 *   la que el siguiente siempre es la suma de los dos anteriores.
 *   0, 1, 1, 2, 3, 5, 8, 13...
 */
 // Inicializar los dos primeros números de la sucesión de Fibonacci
 $n1 = 0;
 $n2 = 2;
 // Imprimir los dos primeros números
 echo $n1 . "<br> ";
 echo $n2 . "<br> ";
 // Generar y mostrar los siguientes 48 números
 for ($i = 3; $i <= 50; $i++) {
     $siguiente = $n1 + $n2; // Calcular el siguiente número en la secuencia
     echo $siguiente;
     if ($i < 50) {
         echo "<br> "; // Añadir coma para separar los números
     }
     // Actualizar los valores de a y b
     $n1 = $n2;
     $n2 = $siguiente;
 }
 ?>
 