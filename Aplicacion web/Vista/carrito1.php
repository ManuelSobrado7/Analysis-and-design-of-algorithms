<?php
session_start();
$mensaje="";

if (isset($_POST['btnAccion'])) {
  switch ($_POST['btnAccion']) {
    case 'Agregar':
        if (is_numeric( openssl_decrypt($_POST['id'],COD,KEY))) {
          $ID=openssl_decrypt($_POST['id'],COD,KEY);
          $mensaje="ok id correcto".$ID;

        }else {
          $mensaje=" Error ID incorrecto"; break;
        }  if (is_string(openssl_decrypt($_POST['nombre'],COD,KEY))) {
            $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
            $mensaje="ok NOMBRE correcto".$NOMBRE;

          }else {
            $mensaje=" Error nombre incorrecto"; break;
          }

          if (is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY))) {
              $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
              $mensaje="ok cantidad correcto".$CANTIDAD;

            }else {
              $mensaje=" Error cantidad incorrecta"; break;}
            if (is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))) {
                $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
                $mensaje="ok precio correcto".$PRECIO;

              }else {
                $mensaje=" Error precio incorrecto";
                break;
              }



          if (!isset($_SESSION['CARRITO'])) {
           $producto=array(
             'ID'=>$ID,
             'NOMBRE'=>$NOMBRE,
             'CANTIDAD'=>$CANTIDAD,
             'PRECIO'=>$PRECIO);
             $_SESSION['CARRITO'][0]=$producto;

           }
           else {
             $NumeroProductos=count($_SESSION['CARRITO']);
             $producto=array(
               'ID'=>$ID,
               'NOMBRE'=>$NOMBRE,
               'CANTIDAD'=>$CANTIDAD,
               'PRECIO'=>$PRECIO);
                $_SESSION['CARRITO'][0]=$producto;
           }
           $mensaje=print_r($_SESSION,true);

      break;
  }
}


?>
