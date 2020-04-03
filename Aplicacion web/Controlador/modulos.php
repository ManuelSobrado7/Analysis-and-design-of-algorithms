<?php
include('../modelo/conexion.php');
$usuarioM = $_POST['usuarioM'];
$agregarP  = $_POST['agregarP'];
$listarP    = $_POST['listarP'];
$eliminarP = $_POST['eliminarP'];
$editarP = $_POST['editarP'];

$var = new conexion();
$var->AsignarModulos($usuarioM, $agregarP, $listarP, $eliminarP, $editarP);
$var->cerrar();




 ?>
