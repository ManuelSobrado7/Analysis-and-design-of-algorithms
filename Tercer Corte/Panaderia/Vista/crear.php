<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/loginn.css" style="text/css">


  </head>
  <body>

    <section id=formulario>
      <center>
      <h1>Resgistrate</h1> <br>
      <br>

      <div class="login">
        <form class=""  method="post">
          <fieldset>
            <legend style="color: #A914AA ">AmFru</legend>
            <p>
                <p style="color: #000000">Id</p>
                <input id="id" type="text" id="nombre" value="" placeholder="Digita tu cedula" title="Campos requeridos" required>
            </p>

          <p>
              <p style="color: #000000">Nombres</p>
              <input type="text" id="nombre" value="" placeholder="Digita tus nombres" title="Campos requeridos" required>
          </p>

          <p>
              <p style="color: #000000">Apellidos</p>
              <input type="text" id="apellido" value="" placeholder="Digita tus apellidos" title="Campos requeridos" required>
          </p>

          <p>
              <p style="color: #000000">Nombre de Usuario</p>
              <input type="text" id="usuario" value="" placeholder="Digita tu Usuario" title="Usuario requerido" required>
          </p>

          <p>
              <p id="p_pass">Contraseña</p>
              <input id="pass1" type="password" name="Password" value="" placeholder="Digita tu Contraseña" title="Contraseña requerida" required>
          </p>

          <p>
              <p id="p_pass">Correo</p>
              <input id="correo" type="text" name="Password" value="" placeholder="Digita tu correo" title="Contraseña requerida" required>
          </p>

          <p>
              <p style="color: #000000">Telefono</p>
              <input id="telefono" type="text" name="Usuario" value="" placeholder="Digita tu telefono" title="Campos requeridos" required>
          </p>

          <p style="color: red">

          </p>

          <p>

              <input  type="reset" name="" value="Limpiar">
              <button id="registrar" type="button" >Registrar</button>
          </p>

          <p id="mensaje" style="color:red"></p>
          <p id="mensajee" style="color: #44EC1E"></p>

          <p>


          <p>
            <a href="index.php">Iniciar sesion </a>
          </p>
          </fieldset>
        </form>

      </div>
    </center>
    </section>
    <script src="js/jqueryy.js" charset="utf-8"></script>
    <script src="js/operacioness.js" charset="utf-8"></script>

  </body>

</html>
