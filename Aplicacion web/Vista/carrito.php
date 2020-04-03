<?php
include ("../Modelo/config.php");
include ("../Modelo/conexxion.php");
include ("carrito1.php");

 ?>


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
       <a class="navbar-brand" href="#"><img class="img-fluid" src="" alt=""></a>
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
             <a class="nav-link " href="#" data-toggle="modal" data-target="#exampleModal">INICIAR SESION</a>
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
                  <a class="nav-link" href="mostrarcarrito.php">Carrito(<?php echo (empty($_SESSION['CARRITO']))?0 :count($_SESSION['CARRITO']);
                  ?>) </a>
                </li>
          <br></br>

         </ul>
       </div>
     </nav>
      <!--       carrito                   *-------------------------------------------------->


      <div class="row">
        <?php
          $sentencia=$pdo->prepare("SELECT * FROM 'tblproductos'");
          $sentencia->execute();
          $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
          //print_r($listaProductos);
        ?>
        <?php foreach ($listaProductos as $producto) {?>
          <div class="col-4">
            <div class="card">
              <img class="card-img-top"
              src="<?php echo $producto['Imagen']; ?>"
              title="<?php echo $producto['Nombre']; ?>"
               alt="<?php echo $producto['Nombre']; ?>">


             <div class="card-body">
               <span><?php echo $producto['Nombre']; ?></span>
               <h5 class="card-title"><?php echo $producto['Precio']; ?></h5>
               <p class="card-text">Descripcion</p>


          <form class="" action="" method="post">
          <input type="text" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
          <input type="text" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>">
          <input type="text" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>">
          <input type="text" name="cantidad" id="cantidad" value="<?php echo 1; ?>">

          <button class="btn btn-primary" value="Agregar" type="submit" name="btnAccion">Agregar al carrito</button>

          </form>



             </div>
            </div>
          <br> </br>
          </div>




        <?php } ?>


        <div class="col-4">
          <div class="card">
            <img class="card-img-top"
            src="<?php echo $producto['Imagen']; ?>"
            title="<?php echo $producto['Nombre']; ?>"
             alt="<?php echo $producto['Nombre']; ?>">


           <div class="card-body">
             <span><?php echo $producto['Nombre']; ?></span>
             <h5 class="card-title"><?php echo $producto['Precio']; ?></h5>
             <p class="card-text">Descripcion</p>


        <form class="" action="" method="post">
        <input type="text" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
        <input type="text" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>">
        <input type="text" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>">
        <input type="text" name="cantidad" id="cantidad" value="<?php echo 1; ?>">

        <button class="btn btn-primary" value="Agregar" type="submit" name="btnAccion">Agregar al carrito</button>

        </form>



           </div>
          </div>
        <br> </br>
        </div>






     </div>


 </body>

 <footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-4">© 2018 universidad San Buenaventura:
    <a href="usuario.php">Home.php</a>
  </div>
  <!-- Copyright -->

</footer>

 </html>
