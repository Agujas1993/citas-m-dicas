<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1.10</title>
</head>
<body>
<h3>Resolución del ejercicio 10 de la hoja 1</h3>

<?php
$currentDate = $_POST['currentDate'];
$birthDate = $_POST['birthDate'];

$days = (strtotime($birthDate)-strtotime($currentDate))/86400;
$days = abs($days);
$age = $days/365;
$age = number_format($age);
echo "Tu edad es $age años";

?>


<br>
    <a href="../index.php">Volver al inicio</a>
</body>
</html>