<?php include 'includes/header.php';

$cliente =[
    'nombre' => 'Miguel',
    'saldo' => 200,
    'nombre' => [
        'tipo' => 'Premium',
        'disponible'=> 100
    ]
];

echo "<pre>";
var_dump($cliente['informacion']);
echo "</pre>";
echo $cliente['nombre'];
echo $cliente ['informacion']['disponible'];

include 'includes/footer.php';