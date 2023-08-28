<?php include 'includes/header.php';

$clientes= [];
$clientes2= array();
$clientes3 = array('Perro','Roca','Cicla');
$cliente = [
    'nombre' => 'raul',
    'saldo' => 200
];

// Empty - Revisa si un arreglo esta creado o una propiedad esta definida

var_dump( empty($clientes) );
var_dump( empty($clientes2) );
var_dump( empty($clientes3) );

//Isset - Revisar si un arreglo o una propiedad esta definida
echo "<br>";
var_dump( isset($clientes2) );
var_dump( isset($clientes4) );
var_dump( isset($clientes) );
var_dump( isset($clientes3) );

var_dump( isset($cliente['nombre'])  );


include 'includes/footer.php';