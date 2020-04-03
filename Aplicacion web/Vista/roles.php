<?php
session_start();

if ($_SESSION['validar'] == 1) {

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Roles</title>
    <link rel="stylesheet" href="css/agregar.css">
    <link rel="stylesheet" href="css/loginn.css" style="text/css">


  </head>
  <body>

    <a href="administrador.php">Regresar</a>

    <section id=formulario>
      <center>
      <h1>Creacion de roles</h1> <br>
      <br>

      <div class="login">
        <form class=""  method="post">
          <fieldset>
            <legend style="color: #A914AA ">AmFru</legend>





          <p>
              <p style="color: #000000">Nombre del rol</p>
              <input type="text" id="NombreRol" value="" placeholder="Digite el nombre del rol" title="Campo requerido" required>
          </p>

          <div class="">
            <p style="color: #000000">Descripcion del rol</p>
             <textarea name="producto" rows="5" cols="50" id="area" title="Descripcion" required></textarea>
             <p id="mensajee" style="color: red"></p>
             <p id="mensaje" style="color: #44EC1E"></p>

          </div>



          <p style="color: red">

          </p>

          <p>

              <input  type="reset" name="" value="Limpiar">
              <button type="button" name="button" id="CrearRol" >Crear</button>

          </p>

          <p id="mensaje" style="color:red"></p>
          <p id="mensajee" style="color: #44EC1E"></p>

          <p>



          </fieldset>
        </form>

      </div>
    </center>
    </section>
    <script src="js/jqueryy.js" charset="utf-8"></script>
    <script src="js/operaciones.js" charset="utf-8"></script>

  </body>

</html>

<?php

}else{
  header("location: login.php");

}





 ?>
