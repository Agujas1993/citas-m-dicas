<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.4</title>
</head>
<body>
<h3>Resolución del ejercicio 4 de la hoja 2</h3>
<?php
$anyo = 2020;

if(!($anyo % 4) && ($anyo % 100 || !($anyo % 400))){
echo "$anyo es bisiesto";
} else {
    echo "El año $anyo no es bisiesto";
}


?>

<br>
<br>
    <a href="../index.php">Volver al inicio</a>