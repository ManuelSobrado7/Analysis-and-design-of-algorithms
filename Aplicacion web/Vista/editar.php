<?php
session_start();

if ($_SESSION['validar'] == 1) {

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Editar producto</title>

     <link rel="stylesheet" href="css/agregar.css">
   </head>
   <body>
     <center>
       <a href="opereciones_admin.html">Regresar</a>

       <div class="agregacion">
         <form id="formulario" action="index.html" method="post">
           <h3 class="title">Editar producto</h3>
           <p style="">Nombre del prodcuto</p>
           <input type="text" id="nombree"  title="Se necesita nombre del producto" required>
           <p>Nuevo precio del producto</p>
           <input type="text" id="valorr"  title="Se necesita nombre del producto" required>
           <p>Nueva descripcion del producto</p>
           <div class="">
              <textarea name="producto" rows="5" cols="50" id="areaa" title="Ingresa la descripcion del producto" required></textarea>
              <p id="mensajee" style="color: red"></p>
              <p id="mensaje" style="color: #44EC1E"></p>

           </div>
           <input type="reset" name="" value="Limpiar" >
           <button type="button" name="button" id="Editar" >Editar producto</button>

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
