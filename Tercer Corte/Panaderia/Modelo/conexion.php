
<?php

class conexion{
  private $conexion;
  private $server = "localhost";
  private $usuario = "root";
  private $pass = "";
  private $db = "AmFru";
  private $user;
  private $password;

  public function __construct(){
    $this->conexion = new mysqli($this->server, $this->usuario, $this->pass, $this->db);
    if ($this->conexion->connect_errno) {
      die("pailas: (".$this->conexion->connect_errno.")");
      return 0;
    }else{

      return 1;
    }

  }

  public function cerrar(){
    $this->conexion->close();
    return 1;
  }

  public function login($usuario, $pass){
      $this->user = $usuario;
      $this->password = $pass;

      $query = "select * from usuarios where nombre_usuario ='".$this->user."' and password = '".$this->password."' ";
      $consulta = $this->conexion->query($query);

      $row = mysqli_fetch_array($consulta);

      if($row['id_rol'] == 2 ) {

        session_start();
        $_SESSION['validar'] = 1;

        echo "opereciones_admin.html";
        return 1;


      }else if($row['id_rol'] == 1){

        session_start();
        $_SESSION['validar'] = 1;


        echo "opereciones_admin.html";
        return 2;

      }else{

        session_start();
        $_SESSION['validar'] = 0;

        echo 1;
        return 3;
      }


    }

    function registrar_usuario($id, $nombre, $apellido, $usuario, $pass1, $correo, $telefono){

      session_start();
      $res = $this->conexion->query("select id_usuario, nombre from usuarios where id_usuario = '".$id."' ");


      if (mysqli_num_rows($res)>0) {
        echo '1';
        return 1;
      }else {
        $this->conexion->query("insert into usuarios values($id,'".$nombre."','".$apellido."','".$usuario."','".$pass1."','".$correo."',$telefono,2)");
        echo "¡Registro exitoso!";
        return 0;
      }













      #$consulta = $this->conexion->query("select nombre_usuario from usuarios where usuario = '".$usuario."'");



        #$query="insert into usuarios values($id,'".$nombre."','".$apellido."','".$usuario."','".$pass1."','".$correo."',$telefono,2)";
        #$consulta=$this->conexion->query($query);

        #if ($consulta===true) {
          #session_start();
          ##$_SESSION['validar'] = 1;
          #echo "usuario.php";#

        #} else {

          #echo "Error: " . $query . "<br>" . $this->conexion->error;
        #}

      }





      public function agregarProducto($nombre, $valor, $des, $cantidad, $fecha){

        session_start();
        $res = $this->conexion->query("select nombre, id_usuario from producto where nombre = '".$nombre."' ");


        if (mysqli_num_rows($res)>0) {
          echo '1';
        }else {
          $this->conexion->query("insert into producto values('','".$nombre."','".$valor."','".$des."',1,'".$cantidad."', '".$fecha."','')");
          echo "¡Se registró con éxito el producto!";
        }

      }


      public function CalcularCantidad(){
        session_start();
        $this->conexion->query("update producto set Valor_total =cantidad*precio");
        echo "Se calculó el valor por producto";

      }





      public function VentasDiarias($fecha){

        session_start();
        $res = $this->conexion->query("select SUM(Valor_total) from producto where fecha = '".$fecha."'");
        $row = mysqli_fetch_array($res);
        $row1 = implode(', El valor total de las ventas del dia '.$fecha.' es: ',$row);


        if ($row1 == 0) {

          echo "En ese dia no hubo ninguna venta";
        } else {



          echo $row1;

        }


      }

      public function eliminarProducto($nombre){
        session_start();
        $res = $this->conexion->query("select nombre, id_usuario from producto where nombre = '".$nombre."' ");

        if (mysqli_num_rows($res)>0) {
          $this->conexion->query("delete from producto where nombre = '".$nombre."'");
          echo "Se eliminó con éxito el producto.";


        }else {
          echo'1';
        }




      }

      public function editarProducto($nombree, $valorr, $dess){

        session_start();
        $res = $this->conexion->query("select nombre, id_usuario from producto where nombre = '".$nombree."' ");


        if (mysqli_num_rows($res)>0) {
          $this->conexion->query("update producto set nombre = '".$nombree."', precio = '".$valorr."', descripcion = '".$dess."' where nombre ='".$nombree."' ");
          echo "Se actualizó el producto";
        }else {
          echo "1";

        }

      }


      public function buscarProducto(){

        $consulta = $this->conexion->query("select nombre, precio from producto where id_usuario = '".$_SESSION['validar']."' ");

        while ($row = mysqli_fetch_array($consulta)) {
          echo "<tr>";;
          echo "<td>".$row['nombre']. "</td><td>".$row['precio']. "</td>";
          echo "</tr>";
        }


      }









    }








 ?>
