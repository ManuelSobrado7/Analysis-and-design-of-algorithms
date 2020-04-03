<?php

$radio = $_POST['radioE'];
$pi = 3.14159;
$RadioElevado = pow($radio, 3);
$Volumen = (4.0/3)*$pi*$RadioElevado;
echo "Volumen: ";
echo round($Volumen, 3);


 ?>
