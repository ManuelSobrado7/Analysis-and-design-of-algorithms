<?php
session_start();

if ($_SESSION['validar'] == 1) {

 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">

 <head>
   <meta charset="utf-8">
   <title>Admin</title>

   <link rel="stylesheet" href="css/bootstrap.min.css">


 </head>


 <body>


   <!--       barra de navegacion                     *-------------------------------------------------->
   <div class="container">

     <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <a class="navbar-brand" href="#"><img class="img-fluid" src="" alt=""></a>
       <!--dentro de la barra de navegacion pusimos un icono de dicemciones pequeñas*/-->
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNav">

         <ul class="navbar-nav">
           <li class="nav-item active">
             <a style="color : blue" class="nav-link" href="administrador.php">Home <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
             <a style="color : blue" class="nav-link" href="opereciones_admin.html">Opciones de Administrador</a>
           </li>

           <li class="nav-item">
             <a style="color : blue" class="nav-link" href="modulos.php">Asignacion de Modulos</a>
           </li>

           <li class="nav-item">
             <a style="color : blue" class="nav-link" href="roles.php">Creacion de Roles</a>
           </li>

           <li class="nav-item">
             <a style="color : blue" class="nav-link" href="rolesAsignar.php">Asignacion de Roles</a>
           </li>

           <li class="nav-item">
             <a style="color : blue" class="nav-link" href="login.php">Cerrar Sesion</a>
           </li>

           </li>

         </ul>
       </div>
     </nav>
     <!--             carrusel de 1024*400px               *-------------------------------------------------->



     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">




       <div class="carousel-inner">
         <div  class="carousel-item active">
           <center>
           <img style="width: 500px; height: 500px;" class="d-block w-45" src="img/13.jpg" alt="First slide">
         </center>
         </div>
         <div class="carousel-item">
           <center>
           <img style="width: 500px; height: 500px;"  class="d-block w-45" src="img/12.jpg" alt="Second slide">
         </center>
         </div>
         <div class="carousel-item">
           <center>
           <img style="width: 500px; height: 500px;" class="d-block w-45" src="img/11.jpg" alt="Third slide">
         </center>
         </div>
         <div class="carousel-item">
           <center>
           <img style="width: 500px; height: 500px;" class="d-block w-45" src="img/14.jpg" alt="Third slide">
         </center>
         </div>
         <div class="carousel-item">
           <center>
           <img style="width: 500px; height: 500px;" class="d-block w-45" src="img/15.jpg" alt="Third slide">
         </center>
         </div>
         <div class="carousel-item">
           <center>
           <img style="width: 500px; height: 500px;" class="d-block w-45" src="img/16.jpg" alt="Third slide">
         </center>
         </div>

       </div>
       <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
       </a>
     </div>

     <ul class="list-unstyled">
   <li class="media my-4">
     <img class="mr-3" href="batidos.html" src="img/4.png" alt="Generic placeholder image">
     <div class="media-body">
       <h5 class="mt-0 mb-1">BATIDOS</h5>
       </div>
   </li>
   <li class="media my-4">
     <img class="mr-3" src="img/8.png" alt="Generic placeholder image">
     <div class="media-body">
       <h5 class="mt-0 mb-1">DESAYUNOS</h5>
      </div>
   </li>
   <li class="media my-4">
     <img class="mr-3" src="img/6.png" alt="Generic placeholder image">
     <div class="media-body">
       <h5 class="mt-0 mb-1">ALMUERZOS</h5>
        </div>
   </li>
   <li class="media my-4">
     <img class="mr-3" src="img/7.png" alt="Generic placeholder image">
     <div class="media-body">
       <h5 class="mt-0 mb-1">POSTRES</h5>
        </div>
   </li>
   <li class= "media my-4">
     <img class="mr-3" src="img/9.png" alt="Generic placeholder image">
     <div class="media-body">
       <h5 class="mt-0 mb-1">FRUTAS</h5>
        </div>
   </li>
 </ul>

     </div>





   </div>








   <!--                            *-------------------------------------------------->
   <script src="js/jquery-3.3.1.slim.min.js" charset="utf-8"></script>
   <script src="js/bootstrap.min.js" charset="utf-8"></script>
   </script>
 </body>


  <footer class="page-footer font-small blue">

   <!-- Copyright -->
   <div class="footer-copyright text-center py-4">© 2018 universidad San Buenaventura

   </div>
   <!-- Copyright -->

 </footer>

 </html>








<?php

}else{
  header("location: login.php");

}





 ?>
