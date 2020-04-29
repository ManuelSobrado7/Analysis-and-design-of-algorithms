<?php
include('../modelo/conexion.php');

$fecha = $_POST['fecha'];

$var = new conexion();
$var->VentasDiarias($fecha);
$var->cerrar();






 ?>
