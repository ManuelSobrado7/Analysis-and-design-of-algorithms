<?php

$PreciosV = $_POST['Pviejos'];
$PreciosN = $_POST['Pnuevos'];

  if (($PreciosV > 0 && $PreciosV <= 1000.00) and ($PreciosN > 0 && $PreciosN <= 1000.00)) {

    if ($PreciosN/$PreciosV == 2) {
      echo "HOW ABSURD! THE PRICE OF CINEMA TICKETS HAS RISEN 100.00%";
    }else {
      $Diferencia = $PreciosN - $PreciosV;
      $Porcentaje = $Diferencia * 10;
      $Salida = $Porcentaje / 2;
      echo "HOW ABSURD! THE PRICE OF CINEMA TICKETS HAS RISEN ";
      echo $Salida;
      echo ".00%";
    }



  }else {
    echo "Inserte valores válidos";
  }




?>
