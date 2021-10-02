<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.8</title>
</head>
<body>
<h3>Resolución del ejercicio 8 de la hoja 2</h3>

<?php

$factorial = 1;
$numero = 3; 
for ($i = 1; $i <= $numero; $i++){ 
    $factorial = $factorial * $i; 
  } 
  echo "Factorial de $numero  = $factorial"; 

?>
<br>
<br>
<a href="../index.php">Volver al inicio</a>