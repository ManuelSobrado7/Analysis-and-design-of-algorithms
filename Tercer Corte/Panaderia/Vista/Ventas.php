<?php
session_start();

if ($_SESSION['validar'] == 1) {

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Buscar</title>
    <link rel="stylesheet" href="css/buscar.css">
  </head>
  <body>
    <center>
    <a href="opereciones_admin.html">Regresar</a>

    <div class="buscar">
      <h3 class="title">Calcular ventas diarias</h3>
      <p>Fecha</p>
      <input type="date" id="fecha"  title="Inserte la fecha de la venta" required>
      <br>
      <br><br>


      <button type="button" name="button" id="CalcularV" class="uno">Calcular valor para cada producto </button>

      <br>
      <button type="button" name="button" id="VentasTotal" class="uno">Calcular las ventas del día</button>

      <p id="mensajee" style="color: red"></p>
      <p id="mensaje" style="color: black"></p>


    </div>



  </center>
  <script src="js/jqueryy.js" charset="utf-8"></script>
  <script src="js/operaciones.js" charset="utf-8"></script>
  </body>
</html>
<?php

}else{

  echo "login.php";

}





 ?>
