<?php
include("../Modelo/conexion.php");

 $id = $_POST['id'];
 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $usuario = $_POST['usuario'];
 $pass1 = $_POST['pass1'];
  $correo = $_POST['correo'];
 $telefono = $_POST['telefono'];

 $object = new conexion();
 $object -> registrar_usuario($id, $nombre, $apellido, $usuario, $pass1, $correo, $telefono);
 $object -> cerrar();

 ?>
