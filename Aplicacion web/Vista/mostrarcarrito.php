
  <!DOCTYPE html>
  <html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Amfrue</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/jquery-3.3.1.slim.min.js" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>

  </head>


  <body>


    <!--       barra de navegacion                     *-------------------------------------------------->
    <div class="container">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img class="img-fluid" src="vista/img/5.png" alt=""></a>
        <!--dentro de la barra de navegacion pusimos un icono de dicemciones pequeñas*/-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="usuario.php">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">CATALOGO</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">QUIENES SOMOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" >SERVICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#" data-toggle="modal" data-target="#exampleModal">CONTACTENOS</a>
            </li>
            <li class="nav-item active">
                   <a class="nav-link" href="#">Carrito </a>
                 </li>
                 <br></br>

          </ul>

        </div>

      </nav>








      <table class="table table-light">
        <tbody>
          <tr>
            <th width="40%">Descripcion</th>
              <th width="15%">Cantidad</th>
                <th width="20%">precio</th>
                  <th width="20%">total</th>
                    <th width="5%">--</th>

          </tr>

    <tr>
         <td width="40%">batidos de Lulo</th>
         <td width="15%">1</th>
         <td width="20%">$4700</th>
         <td width="20%"></th>
         <td width="5%"><button class="btn btn-danger" type="button">Eliminar</button>  </th>

          </tr>

          <tr>
               <td width="40%">batidos de Mora</th>
               <td width="15%">1</th>
               <td width="20%">$4700</th>
               <td width="20%"></th>
               <td width="5%"><button class="btn btn-danger" type="button">Eliminar</button>  </th>

                </tr>

        </tbody>

      </table>
      </div>
