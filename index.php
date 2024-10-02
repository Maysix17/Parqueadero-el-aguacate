<?php
require_once("ClassCliente.php");
require_once("ClassVehiculo.php");
require_once("ClassParqueadero.php");


$cliente = new Cliente("Jose Garcia", "145432456");
$vehiculo = new Vehiculo("QUW-44H", "Ford", "Negro", $cliente);

$parqueadero = new Parqueadero();


echo $parqueadero->registrarEspacio($vehiculo, 2);


echo "\nCosto por 5 horas: $" . $parqueadero->calcularPago(5);

print_r($parqueadero->mostrarEstado());




?>