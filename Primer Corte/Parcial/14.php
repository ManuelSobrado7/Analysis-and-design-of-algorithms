<?php

$ValorP = $_POST['PValor'];
$ValorS = $_POST['SValor'];

    if ($ValorP == 0 and $ValorS == 0) {
      echo "Origem";
    }

    if ($ValorP == 0 and $ValorS != 0) {
      echo "Eixo X";
    }
    if ($ValorS == 0 and $ValorP != 0) {
      echo "Eixo Y";
    }
    if ($ValorP > 0 and $ValorS < 0) {
      echo "Q4";
    }
    if ($ValorP > 0 and $ValorS > 0){
      echo "Q1";
    }
    if ($ValorP < 0 and $ValorS < 0){
      echo "Q2";
    }
    if ($ValorP < 0 and $ValorS > 0){
      echo "Q3";
    }





?>
