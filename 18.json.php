<?php 
declare(strict_types=1);
include 'includes/header.php';

$productos = [
    [

          'nombre' => 'Reloj',
          'precio' => 150,
          'disponible' => true
    
    ],
    [
        'nombre' => 'Televisor 24"',
        'precio' => 400,
        'disponible' => true
    
    
    ],
    [
        'nombre' => 'Procesador',
        'precio' => 200,
        'disponible' => false
    
    ]

];

echo "<pre>";
var_dump($productos);

$json = json_encode($productos, JSON_UNESCAPED_UNICODE);

$json_array = json_decode($json);

var_dump($json);
var_dump($json_array);
echo"</pre>";


include 'includes/footer.php';