<?php

$Estudiante1 = $_POST['Codigo1'];
$Estudiante2 = $_POST['Codigo2'];
$Estudiante3 = $_POST['Codigo3'];
$Nota1 = $_POST['Nota1'];
$Nota2 = $_POST['Nota2'];
$Nota3 = $_POST['Nota3'];


if ($Nota1 or $Nota2 or $Nota3 >= 8 ){
  if ($Nota1 > $Nota2 and $Nota3) {
    echo $Estudiante1;
  }

  if ($Nota2 > $Nota1 and $Nota3) {
    echo $Estudiante2;
  }

  if ($Nota3 > $Nota1 and $Nota2) {
    echo $Estudiante3;
  }
}else {
  echo "Minimum note not reached";
}


 ?>
