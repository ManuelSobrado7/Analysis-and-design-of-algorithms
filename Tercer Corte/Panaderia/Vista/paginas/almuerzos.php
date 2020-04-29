

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
             <a class="nav-link" href="../usuario.php">HOME <span class="sr-only">(current)</span></a>
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
                  <a class="nav-link" href="../mostrarcarrito.php">Carrito(<?php echo (empty($_SESSION['CARRITO']))?0 :count($_SESSION['CARRITO']);
                  ?>) </a>
                </li>
                <br></br>

         </ul>

       </div>

     </nav>



 <div class="row">

   <div class="col-4">
     <div class="card">
       <img src="imgB/10.png" alt="Titulo">

      <div class="card-body">
        <span>Ensalada Mixta</span>
        <h5 class="card-title">$30000</h5>
        <p class="card-text">Descripcion</p>

        <a href="../carrito.php" class="btn btn-primary btn-lg active" style="background: #A914AA " role="button" aria-pressed="true">Agregar al carrito</a>


      </div>
     </div>
<br> </br>
   </div>

   <div class="col-4">
     <div class="card">
       <img src="imgB/11.png" alt="Titulo">

      <div class="card-body">
        <span>Pechuga asada</span>
        <h5 class="card-title">$50000</h5>
        <p class="card-text">Descripcion</p>
        <a href="../carrito.php" class="btn btn-primary btn-lg active" style="background: #A914AA " role="button" aria-pressed="true">Agregar al carrito</a>

      </div>
     </div>

   </div>

   <div class="col-4">
     <div class="card">
       <img src="imgB/12.png" alt="Titulo">

      <div class="card-body">
        <span>Wrap de pollo</span>
        <h5 class="card-title">$35000</h5>
        <p class="card-text">Descripcion</p>

        <a href="../carrito.php" class="btn btn-primary btn-lg active" style="background: #A914AA " role="button" aria-pressed="true">Agregar al carrito</a>

      </div>
     </div>

   </div>



   <div class="col-4">
     <div class="card">
       <img src="imgB/13.png" alt="Titulo">

      <div class="card-body">
        <span>Pasta con verdura</span>
        <h5 class="card-title">$35000</h5>
        <p class="card-text">Descripcion</p>

        <a href="../carrito.php" class="btn btn-primary btn-lg active" style="background: #A914AA " role="button" aria-pressed="true">Agregar al carrito</a>

      </div>
     </div>

   </div>


      <div class="col-4">
        <div class="card">
          <img src="imgB/14.png" alt="Titulo">

         <div class="card-body">
           <span>Carne en salsa BBQ</span>
           <h5 class="card-title">$35000</h5>
           <p class="card-text">Descripcion</p>

           <a href="../carrito.php" class="btn btn-primary btn-lg active" style="background: #A914AA " role="button" aria-pressed="true">Agregar al carrito</a>

         </div>
        </div>

      </div>



         <div class="col-4">
           <div class="card">
             <img src="imgB/10.png" alt="Titulo">

            <div class="card-body">
              <span>Batido de Temporada</span>
              <h5 class="card-title">$35000</h5>
              <p class="card-text">Descripcion</p>

              <a href="../carrito.php" class="btn btn-primary btn-lg active" style="background: #A914AA " role="button" aria-pressed="true">Agregar al carrito</a>

            </div>
           </div>

         </div>



 </div>

 </div>





   </div>








   <!--                            *-------------------------------------------------->
   <script src="js/jquery-3.3.1.slim.min.js" charset="utf-8"></script>
   <script src="js/bootstrap.min.js" charset="utf-8"></script>

 </body>

 <footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-4">© 2018 universidad San Buenaventura:
    <a href="usuario.php">Home.php</a>
  </div>
  <!-- Copyright -->

</footer>

 </html>
