<?php
include('../modelo/conexion.php');
$nombree = $_POST['nombree'];
$valorr  = $_POST['valorr'];
$dess    = $_POST['dess'];

$var = new conexion();
$var->editarProducto($nombree, $valorr, $dess);
$var->cerrar();




 ?>
