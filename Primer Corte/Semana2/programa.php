<?php

$Inicio = $_POST['Inicio'];
$Final = $_POST['Final'];

  if ($Inicio < $Final) {

    $var1 = $Final-$Inicio;
    echo "El juego duró ";
    echo $var1;
    echo " horas";

  }else {

    $var1 = 24-$Inicio;
    $var2 = $var1+$Final;

    echo "El juego duró ";
    echo $var2;
    echo " horas";
  }

?>
