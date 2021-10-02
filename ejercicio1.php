<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.1</title>
</head>
<body>
<h3>Resolución del ejercicio 1 de la hoja 2</h3>

<?php
$number1 = -2;
$number2 = 3;
$number3 = 5;

if( is_numeric($number1) AND ($number1 < 0) ) {
    $total = $number1 * $number2 * $number3;
    echo "El primer número es negativo por lo que el producto de estos tres números es $total";
} else {
    $total = $number1 + $number2 + $number3;
    echo "El primer número no es negativo por lo que la suma de estos tres números es $total";
}

?>
<br>
<br>
<a href="../index.php">Volver al inicio</a>