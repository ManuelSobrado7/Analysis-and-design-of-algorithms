<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>iniar Sesión</title>
    <link rel="stylesheet" href="css/loginn.css">
  </head>
  <body>

    <section id=formulario>
      <center>
      <h1>Iniciar Sesión</h1> <br>
      <br>

      <div class="login">
        <form class="" action="../Controlador/login.php" method="post">
          <fieldset>
            <legend style="color: #A914AA ">AmFru</legend>
          <p>
              <p style="color: #000000">Usuario</p>
              <input class="user1" type="text" name="usuario" value="" placeholder="Digita tu Usuario" title="Usuario requerido" required>
          </p>

          <p>
              <p id="p_pass">Contraseña</p>
              <input class="pass1" type="password" name="password" value="" placeholder="Digita tu Contraseña" title="Contraseña requerida" required>
          </p>

          <p>

              <input type="reset" name="" value="Limpiar">
              <button type="button" id="ingresar">Ingresar</button>
          </p>

          <p id="mensaje" style="color:red"></p>

          <p>
            <a href="crear.php">Crea una cuenta</a>
          </p>


          </fieldset>
        </form>

        <div id="divempty">

        </div>

      </div>
    </center>
    </section>

    <script src="js/jqueryy.js" charset="utf-8"></script>
    <script src="js/operacioness.js" charset="utf-8"></script>
  </body>
</html>
