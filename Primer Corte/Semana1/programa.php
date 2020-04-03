<?php

$Tiempo = $_POST['Tiempo'];
$Velocidad = $_POST['VelocidadMedia'];
$Autonomia = 12;
$Distancia = $Velocidad*$Tiempo;
$Litros = $Distancia/$Autonomia;
echo "Litros necesarios: ";
echo round($Litros, 3);

?>
