<?php include 'includes/header.php';

//while
$i = 0;//Inicializador

while ($i <= 10) {

   echo $i . "<br>";

   $i++;//incremento
}
 echo "<br>";

 //Do while

 $i = 0;

 do {
   echo $i . "<br>";

   $i++;
 } while ($i < 10);

 echo "<br>";

 /**
  * 3 imprimir Fizz
  * 5 imprimir Buzz
  * 3 y 5 imprimir fizz buzz
  */

// For loop.
for ($i=0; $i < 100; $i++) { 
    if ($i % 3 ===0 && $i % 5 === 0) {
       echo $i . " -FIZZ BUZZ <br/>";
    }elseif ($i % 3 ===0 ) {
         echo $i . " -FIZZ  <br/>";
    } elseif ($i % 5 === 0) {
         echo $i . " -BUZZ <br/>";
    } else {
        echo $i ."<br>";
    }
}

// For each
$clientes = array ('Oscar','Penelope','Angelina');

foreach ($clientes as $cliente ):
  echo $cliente . "<br/>";
endforeach;

$cliente = [
  'nombre'=> ' Carlos',
  'saldo'=> 300,
  'tipo'=> 'Premium'
];

foreach ($cliente as $key => $valor) {
  echo $key. "" . $valor . "<br/>";
}
include 'includes/footer.php';
