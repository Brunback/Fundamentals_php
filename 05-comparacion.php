<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 40;
$numero4 = "20";

var_dump($numero1 > $numero2);
echo "<br/>";

var_dump($numero1 < $numero2);
echo "<br/>";

var_dump($numero1 >= $numero2);
echo "<br/>";

var_dump($numero1 <= $numero2);
echo "<br/>";

var_dump($numero2 == $numero3);
echo "<br/>";

var_dump($numero2 == $numero4);
echo "<br/>";

var_dump($numero1 === $numero2);
echo "<br/>";

// -1 si izq es menor ,0 si es igual , y 1 si es mayor
var_dump($numero1 <=> $numero2);
echo "<br/>";

var_dump($numero2 <=> $numero3);
echo "<br/>";


var_dump($numero2 <=> $numero2);
echo "<br/>";

include 'includes/footer.php';