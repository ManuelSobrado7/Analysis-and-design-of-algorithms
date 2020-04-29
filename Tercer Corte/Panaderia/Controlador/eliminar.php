<?php
include('../modelo/conexion.php');

$nombre = $_POST['nombre'];


$var = new conexion();
$var->eliminarProducto($nombre);
$var->cerrar();






 ?>
