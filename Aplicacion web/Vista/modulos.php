<?php
session_start();

if ($_SESSION['validar'] == 1) {

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Modulos</title>
    <link rel="stylesheet" href="css/loginn.css" style="text/css">


  </head>
  <body>


    <a href="administrador.php">Regresar</a>

    <section id=formulario>
      <center>
      <h1>Asignacion de modulos</h1> <br>
      <br>

      <div class="login">
        <form class=""  method="post">
          <fieldset>
            <legend style="color: #A914AA ">AmFru</legend>





          <p>
              <p style="color: #000000">Nombre de Usuario</p>
              <input type="text" id="UsuarioM" value="" placeholder="Digite el nombre de usuario" title="Campo requerido" required>
          </p>

          <p>
              <p id="p_pass">Agregar Productos</p>
              <input id="AgregarP" type="text" name="Password" value="" placeholder="1 para seleccionar 0 para descartar" title="Campo requerido" required>
          </p>

          <p>
              <p id="p_pass">Listar Productos</p>
              <input id="ListarP" type="text" name="Password" value="" placeholder="1 para seleccionar 0 para descartar" title="Campo requerido" required>
          </p>

          <p>
              <p style="color: #000000">Editar Productos</p>
              <input id="EditarP" type="text" name="Usuario" value="" placeholder="1 para seleccionar 0 para descartar" title="Campo requerido" required>
          </p>

          <p>
              <p style="color: #000000">Eliminar Productos</p>
              <input id="EliminarP" type="text" value="" placeholder="1 para seleccionar 0 para descartar" title="Campo requerido" required>
          </p>

          <p style="color: red">

          </p>

          <p>

              <input  type="reset" name="" value="Limpiar">
              <button type="button" name="button" id="Asignar" >Asignar</button>

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
