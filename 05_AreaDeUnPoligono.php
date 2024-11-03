<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de poligonos</title>
</head>
<body> 
<h1>Calculadora de Área de Polígonos</h1>
<form method="POST">
    <label for="tipo">Selecciona el tipo de polígono:</label>
    <select name="tipo" id="tipo" required>
        <option value="1">Triángulo</option>
        <option value="2">Cuadrado</option>
        <option value="3">Rectángulo</option>
    </select>
    <br><br>

    <label for="base">Base:</label>
    <input type="number" name="base" id="base" step="any">
    <br><br>

    <label for="altura">Altura:</label>
    <input type="number" name="altura" id="altura" step="any">
    <br><br>

    <label for="lado">Lado:</label>
    <input type="number" name="lado" id="lado" step="any">
    <br><br>

    <button type="submit">Calcular Área</button>
</form>
<?php
/*
 * Crea una única función (importante que sólo sea una) que sea capaz
 * de calcular y retornar el área de un polígono.
 * - La función recibirá por parámetro sólo UN polígono a la vez.
 * - Los polígonos soportados serán Triángulo, Cuadrado y Rectángulo.
 * - Imprime el cálculo del área de un polígono de cada tipo.
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tipo = $_POST['tipo'];
    $base = isset($_POST['base']) ? (float)$_POST['base'] : 0;
    $altura = isset($_POST['altura']) ? (float)$_POST['altura'] : 0;
    $lado = isset($_POST['lado']) ? (float)$_POST['lado'] : 0;
}
 function calcularArea($tipo,$base,$altura,$lado){

    if($tipo == 1){
        return ($base * $altura)/2;
    }else if($tipo == 2){
        return $lado ** 2;
    }elseif($tipo == 3){
        return $base * $altura;
    }else{
        return"<p>Esa opcion no existe</p>";
    }
 }
 $area = calcularArea($tipo, $base, $altura, $lado);
echo "<h2>El área calculada es: $area</h2>";
?>
</body>
</html>