<?php include 'includes/header.php';

$autenticado =true;
$admin = false;

if($autenticado && $admin ) {
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado, inicia sesión";
}

//If anidados...
$cliente = [
    'nombre'=> ' Carlos',
    'saldo'=> 300,
    'informacion'=> [
        'tipo'=> ' Premium',
    ],
];
if (!empty($cliente)) {
    echo "El arreglo del cliente no esta vacio";
    if ($cliente ['saldo']) {
      echo "El cliente tiene saldo disponible";
    } else {
      echo "No hay saldo";
    }
}
// else if
if ($cliente['saldo']> 0) {
   echo "El cliente tiene saldo";
} else if ($cliente['informacion']['tipo'] === 'Premium') {
   echo "El cliente es premium";
} else {
   echo "No hay saldo";
}
//switch
$tecnologia = 'PHP';

switch ($tecnologia) {
    case 'PHP':
        echo "PHP, un excelente lenguaje";
        break;
    case 'JavaScript':
            echo "JavaScript,lenguaje de la web";
        break;
    case 'HTML':
            echo "Emm..";
        break;
    default:
       echo "Algun lenguaje no se caul es";
        break;
}


include 'includes/footer.php';