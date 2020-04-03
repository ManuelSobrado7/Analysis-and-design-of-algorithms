<?php
session_start();

if ($_SESSION['validar'] == 1) {

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">

 <head>
   <meta charset="utf-8">
   <title>Amfrue</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">


 </head>


 <body>


   <!--       barra de navegacion                     *-------------------------------------------------->
   <!DOCTYPE html>
   <html lang="en" dir="ltr">

   <head>
     <meta charset="utf-8">
     <title>Amfrue</title>
     <link rel="stylesheet" href="css/bootstrap.min.css">


   </head>


   <body>


     <!--       barra de navegacion                     *-------------------------------------------------->
     <div class="container" >

       <nav class="navbar navbar-expand-lg navbar-light bg-light" >
         <a class="navbar-brand" href="#"><img class="img-fluid" src="img/5.png" alt="" ></a>
         <!--dentro de la barra de navegacion pusimos un icono de dicemciones pequeñas*/-->
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">

           <ul class="navbar-nav">
             <li class="nav-item active" >
               <a class="nav-link" href="C:/xampp/htdocs/Proyecto/Vista/usuario.php">HOME <span class="sr-only">(current)</span></a>
             </li>


             <li class="nav-item">
               <a class="nav-link" href="#">QUIENES SOMOS</a>
             </li>

             <li class="nav-item">
               <a class="nav-link " href="contactform.html" data-toggle="modal" data-target="#exampleModal">CONTACTENOS</a>
             </li>
             <li class="nav-item active">
                    <a class="nav-link" href="mostrarcarrito.php">Carrito(<?php echo (empty($_SESSION['CARRITO']))?0 :count($_SESSION['CARRITO']);
                    ?>) </a>
                  </li>
                  <br></br>

           </ul>

         </div>

       </nav>
       <!--             carrusel de 1024*400px               *-------------------------------------------------->



       <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
           <div class="carousel-item active">
             <img class="d-block w-100" src="img/1.png" alt="First slide">
           </div>
           <div class="carousel-item">
             <img class="d-block w-100" src="img/2.png" alt="Second slide">
           </div>
           <div class="carousel-item">
             <img class="d-block w-100" src="img/3.png" alt="Third slide">
           </div>
           <div class="carousel-item">
             <img class="d-block w-100" src="img/4.png" alt="Third slide">
           </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span><br></br>
         </a>
         <br> </br>
       </div>



   <div class="row">

     <div class="col-4">
       <div class="card">
         <img src="img/3.png" alt="Titulo">

        <div class="card-body">
          <span>BATIDOS</span>
          <h5 class="card-title">$30000</h5>
          <p class="card-text">Descripcion</p>

          <a href="paginas/batidos.php" class="btn btn-primary btn-lg active" style="background: #A914AA " role="button" aria-pressed="true">Ver Batidos</a>

        </div>
       </div>
  <br> </br>
     </div>

     <div class="col-4">
       <div class="card" >
         <img src="img/6.png" alt="Titulo">

        <div class="card-body" >
          <span>DESAYUNOS</span>
          <h5 class="card-title">$50000</h5>
          <p class="card-text">Descripcion</p>

          <a href="paginas/desayunos.php" class="btn btn-primary btn-lg active" style="background: #A914AA " role="button" aria-pressed="true">Ver Desayunos</a>

        </div>
       </div>

     </div>

     <div class="col-4">
       <div class="card">
         <img src="img/7.png" alt="Titulo">

        <div class="card-body">
          <span>ALMUERZOS</span>
          <h5 class="card-title">$35000</h5>
          <p class="card-text">Descripcion</p>

          <a href="paginas/almuerzos.php" class="btn btn-primary btn-lg active" style="background: #A914AA " role="button" aria-pressed="true">Ver Almuerzos</a>

        </div>
       </div>

     </div>


     <div class="col-4">
       <div class="card">
         <img src="img/8.png" alt="Titulo">

        <div class="card-body">
          <span>POSTRES</span>
          <h5 class="card-title">$35000</h5>
          <p class="card-text">Descripcion</p>

          <a href="paginas/postres.php" class="btn btn-primary btn-lg active" style="background: #A914AA " role="button" aria-pressed="true">Ver Postres</a>

        </div>
       </div>

     </div>


     <div class="col-4">
       <div class="card">
         <img src="img/9.png" alt="Titulo">

        <div class="card-body">
          <span>FRUTAS</span>
          <h5 class="card-title">$35000</h5>
          <p class="card-text">Descripcion</p>

          <a href="paginas/frutas.php" class="btn btn-primary btn-lg active" style="background: #A914AA " role="button" aria-pressed="true">Ver Fruta</a>

        </div>
       </div>

     </div>





   </div>

   </div>





     </div>







   <!--                            *-------------------------------------------------->
   <script src="js/jquery-3.3.1.slim.min.js" charset="utf-8"></script>
   <script src="js/bootstrap.min.js" charset="utf-8"></script>
   </script>
 </body>

 <footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-4">© 2018 universidad San Buenaventura:
    <a href="usuario.php">Home.php</a>
  </div>
  <!-- Copyright -->

</footer>

 </html>


<?php

}else{
  header("location: login.php");

}





 ?>
