<?php
session_start();

if ($_SESSION['validar'] == 1) {

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Buscar</title>
    <link rel="stylesheet" href="css/buscarr.css">
  </head>
  <body>
    <center>
    <a href="opereciones_admin.html">Regresar</a>

    <div class="buscar">
      <h3 class="title">Buscar producto</h3>
      <?php
      include('../modelo/conexion.php');
      $find = new conexion();
       ?>
       <table id="tabla">
         <tr>
           <th style="font-size:40px">Nombre</th>
           <th style="font-size:40px">Valor</th>
         </tr>

         <?php
         $find->buscarProducto();
         ?>

       </table>

    </div>





  </center>

  </body>
</html>
<?php

}else{

  echo "login.php";

}





 ?>
