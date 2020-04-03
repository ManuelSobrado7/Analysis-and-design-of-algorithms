<?php
include("../Modelo/conexion.php");

 $nombreRol = $_POST['nombreRol'];
 $descRol = $_POST['descRol'];


 $var = new conexion();
 $var -> registrar_rol($descRol, $nombreRol);
 $var -> cerrar();

 ?>
