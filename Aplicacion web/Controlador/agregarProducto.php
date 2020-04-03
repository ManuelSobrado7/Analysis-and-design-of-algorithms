<?php
include('../modelo/conexion.php');
$nombre = $_POST['nombre'];
$valor  = $_POST['valor'];
$des    = $_POST['des'];

$var = new conexion();
$var->agregarProducto($nombre, $valor, $des);
$var->cerrar();




 ?>
