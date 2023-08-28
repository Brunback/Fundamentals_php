<?php include 'includes/header.php';

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
        'disponible' => true
    
    ]

];
foreach ($productos as $producto ) { ?>
    <li>
        <p>Producto: <?php echo $producto['nombre'];?></p>
        <p>Precio:<?php echo "$" . $producto['precio'];?> </p>
        <p><?php echo ($producto['disponible']) ? 'Disponible' : 'No Disponbile'; ?></p>
    </li>
    <?php
}



include 'includes/footer.php';