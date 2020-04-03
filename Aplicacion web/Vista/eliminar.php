<?php
session_start();

if ($_SESSION['validar'] == 1) {

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Eliminar producto</title>
    <link rel="stylesheet" href="css/eliminar.css">
  </head>
  <body>
    <center>
      <a href="opereciones_admin.html">Regresar</a>
      <div class="delete">
        <form id="eliminar" action="index.html" method="post">
          <h3 class="tittle">Buscar y elminar producto</h3>
          <p>Nombre del producto</p>
          <input type="text" id="deletee">
          <p id="mensaje" style="color: red"></p>
          <p id="mensajee" style="color: #44EC1E"></p>

          <table>
            <td>
              <input type="reset" name="" value="Limpiar">
            </td>
            <td>
              <button type="button" class="uno" id="Eliminar">Eliminar producto</button>
            </td>
          </table>

        </form>
      </div>
    </center>
    <script src="js/jqueryy.js" charset="utf-8"></script>
    <script src="js/operacioness.js" charset="utf-8"></script>
  </body>
</html>
<?php

}else{

  echo "login.php";

}





 ?>
