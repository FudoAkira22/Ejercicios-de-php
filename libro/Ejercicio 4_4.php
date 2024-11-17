<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4.4</title>
</head>
<body>
    <h1>Ejercicio 4.4</h1>
    <p>Mostrar en pantalla una tabla de 10 por 10 con los números del 1 al 100</p>
    <?php
    echo "<table border = 1>";
    $num = 10;
    for($i = 1;$i<=10;$i++){
        $multiplicacion = $i * $num;
        echo "$i * $num = $multiplicacion <br>";
    }
    echo "</table>";
    ?>

<hr>
<?php
echo "<table border=1>";
$n=1;
for ($n1=1; $n1<=10; $n1++)
{
 echo "<tr>";
 for ($n2=1; $n2<=10; $n2++)
 {
 echo "<td>", $n, "</td>";
 $n=$n+1;
 }
 echo "</tr>";
}
echo "</table>";
?>
</body>
</html>