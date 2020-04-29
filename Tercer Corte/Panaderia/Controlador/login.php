<?php
include("../Modelo/conexion.php");

if (isset($_POST['usuario']) && isset($_POST['password'])) {
  $user = $_POST['usuario'];
  $pass = $_POST['password'];

  $conn = new conexion;
  $conn->login($user, $pass);
  $conn->cerrar();
}
 









 ?>
