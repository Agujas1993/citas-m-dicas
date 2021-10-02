<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1.5</title>
</head>
<body>
    <h3>Resolución del ejercicio 5 de la hoja 1</h3>

<?php
$anyo_objetivo = 2020;
$anyoActual = $_POST['año'];
$edadActual = $_POST['edad'];


$edadObjetivo = $anyoActual - $edadActual;


$edadObjetivo = $anyo_objetivo - $edadObjetivo;
echo "Tu edad en el $anyo_objetivo es $edadObjetivo años";

?>

<br>
 <a href="../index.php">Volver al inicio</a>