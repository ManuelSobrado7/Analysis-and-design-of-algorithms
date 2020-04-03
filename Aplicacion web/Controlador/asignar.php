<?php
include("../Modelo/conexion.php");

 $nombreRol = $_POST['nombreRol'];
 $idUsuario = $_POST['idUsuario'];


 $var = new conexion();
 $var -> asignar_rol($nombreRol, $idUsuario);
 $var -> cerrar();

 ?>
