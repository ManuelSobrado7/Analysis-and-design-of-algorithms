<?php
include('../modelo/conexion.php');
$nombre = $_POST['nombre'];
$valor  = $_POST['valor'];
$des    = $_POST['des'];
$cantidad = $_POST['cantidad'];
$fecha = $_POST['fecha'];

$var = new conexion();
$var->agregarProducto($nombre, $valor, $des, $cantidad, $fecha);
$var->cerrar();




 ?>
