<?php
ini_set('display_errors', 1)
?>
<?php
$pst=30;
$euro=0.0060;
$total=$euro*$pst;
  echo "30 pesetas son $total €";
?>
<?php
$soyvariable="Soy Josito";
  echo $soyvariable;
?>

<h4>Soy otra etiqueta</h4>
<?php
$yo = "Pepe";
  if ($yo == "Pepe") {
    echo "Yo soy Pepe";
  } else {
    echo "Yo no soy Pepe";
  }
?>

<?php $yo = ""; ?>
<?php if($yo == "Pepe") { ?>
<p>Yo soy Pepe</p>
<?php } else { ?>
<p>Yo no soy Pepe</p>

<?php } ?>
<?php $yo = 10; echo $yo ; echo '<br>'?>
<?php
$nombre = 'Pepe';
echo 'Hola ' .$nombre.'<br>';
echo "Hola $nombre<br>";
?>

<?php
$variable1 = '1';
$variable2 = 1;
if ($variable1 == $variable2) {
  echo 'Son iguales<br>';
} else {
  echo 'No son iguales<br>';
}

echo ($variable1 === $variable2) ? 'Son iguales' : 'No son iguales';
?>
