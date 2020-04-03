<?php




 $server = "localhost";
 $usuario = "root";
 $pass = "";
 $db = "AmFru";


$conexion = mysqli_connect( $server, $usuario, "", $db );


$var = mysqli_query($conexion,"select id from logeado");
$consulta = mysqli_fetch_array($var);
$consulta2 = implode(',',$consulta);

echo "$consulta2";









?>
