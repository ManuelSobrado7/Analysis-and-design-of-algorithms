<?php
session_start();

if ($_SESSION['validar'] == 1) {

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Agregar producto</title>

     <link rel="stylesheet" href="css/agregarr.css">
   </head>
   <body>
     <center>
       <a href="opereciones_admin.html">Regresar</a>

       <div class="agregacion">
         <form id="formulario" action="index.html" method="post">
           <h3 class="title">Agregar nuevo producto</h3>
           <p style="">Nombre del prodcuto</p>
           <input type="text" id="nombre"  title="Se necesita nombre del producto" required>
           <p>Precio del producto</p>
           <input type="text" id="valor"  title="Se necesita nombre del producto" required>
           <p>Cantidad</p>
           <input type="text" id="cantidad"  title="inserte las unidades vendidas" required>
           <p>Fecha</p>
           <input type="date" id="fecha"  title="Inserte la fecha de la venta" required>
           <p>Descripcion del producto</p>
           <div class="">
              <textarea name="producto" rows="5" cols="50" id="area" title="Ingresa la descripcion del producto" required></textarea>
              <p id="mensajee" style="color: red"></p>
              <p id="mensaje" style="color: #44EC1E"></p>

           </div>
           <input type="reset" name="" value="Limpiar" class="uno">
           <button type="button" name="button" id="Agregar" class="uno">Agregar producto</button>

         </form>

       </div>
     </center>
     <script src="js/jqueryy.js" charset="utf-8"></script>
     <script src="js/operaciones.js" charset="utf-8"></script>
   </body>
 </html>
 <?php

 }else{

  echo "login.php";

 }





  ?>
