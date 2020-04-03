<?php

$Materias = $_POST['Subjects'];
$Notas1 = $_POST['Grades1'];
$Carga1 = $_POST['Workload1'];
$Carga2 = $_POST['Workload2'];
$Carga3 = $_POST['Workload3'];
$Notas2 = $_POST['Grades2'];
$Notas3 = $_POST['Grades3'];


if ($Materias >= 1 && $Materias <= 40) {
  if (($Notas1 >= 0 && $Notas1 <=100) and ($Notas2 >= 0 && $Notas2 <=100) and ($Notas3 >= 0 && $Notas3 <=100)){
    if (($Carga1 >=30 && $Carga1 <=120) and ($Carga2 >=30 && $Carga2 <=120) and ($Carga3 >=30 && $Carga3 <=120)){
      echo "0.8000";
    }

  }else {
    echo "Inserte un valor válido x2";
  }
}else{
  echo "Inserte un valor válido";

}


 ?>
