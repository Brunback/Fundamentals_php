<?php include 'includes/header.php';

$nombreCliente = "Miguel Esteban ";

//Conocer extension de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

//Eliminar espacios en blanco
$texto =trim($nombreCliente);
echo strlen($texto);

//Convertir a mayusculas
echo strtoupper($nombreCliente);

//Convertirlo en minusculas
echo strtolower($nombreCliente);

$mail1 ="correo@correo.com";
$mail2 ="Correo@correo.com";

var_dump(strtolower($mail1)=== strtolower($mail2));
echo str_replace('Miguel','M', $nombreCliente);

//Revisar si un string existe o no
echo strpos($nombreCliente, 'Miguel');
$tipoCliente = "Premium";

echo "<br/>";
echo "El cliente ". $nombreCliente ."es ". $tipoCliente;

include 'includes/footer.php';