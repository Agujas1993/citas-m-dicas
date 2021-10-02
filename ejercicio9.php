<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1.9</title>
</head>
<body>
<h3>Resolución del ejercicio 9 de la hoja 1</h3>

<?php
$radianes = 4;
$grados = $radianes * 180 /pi();
$gradosMinutos = explode(".", $grados);
$minutos = ($grados - $gradosMinutos[0]) * 60;
$minutosSegundos = explode(".", $minutos);
$segundos = ($minutos - $minutosSegundos[0]) * 60;


echo "$radianes radianes son $gradosMinutos[0] grados $minutosSegundos[0] minutos y $segundos segundos";
?>


<br>
    <a href="../index.php">Volver al inicio</a>
</body>
</html>