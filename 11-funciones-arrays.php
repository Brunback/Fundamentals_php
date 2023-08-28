<?php include 'includes/header.php';

//in_array - buscar elemento en un arreglo
$carrito =['Tenedor','Cuchara','Equipo','Celular'];


var_dump( in_array('Equipo',$carrito));
var_dump(in_array('carro',$carrito));

//Ordenar elementos de un arreglo
$numeros = array(1,3,4,2,5,7,6);
sort($numeros);// de menor a mayor
rsort($numeros);// de mayor a menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

//ordenar arreglo asociativo

$cliente =array(
    'saldo'=> 200,
    'tipo'=>'premium',
    'nombre'=> 'Esteban',
);

echo "<pre>";
var_dump($cliente);
echo "</pre>";

asort($cliente);// ordena por valores
ksort($clientes);// ordena por llaves (orden alfabetico)
krsort($clientes);//ordena por llaves (orden alfabetico, DE LA Z a la A)
arsort($clientes); //ordena por valores(z primero)

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';