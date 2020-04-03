
<?php

    use   PHPUnit\Framework\TestCase;

    use conexion;

    final class conexionTest extends TestCase
    {
          $conex = new conexion;

          public function testConstruct(){


             $this->assertEquals(

                  1,
                  conexion->__construct()
              ); 
          }


          public function testLogin(){


              $this->assertEquals(

                  valor_prueba, // se debe poner el valor que se espera que returne el modulo.
                  conexion->login(usuario,passw)  // se debe enviar como parametro el usuario y la contraseña con el que corresponda el valor de prueba o de retorno de el modulo
              ); 

          }

          public function  testRegistro(){


                $this->assertEquals(

                  valor_prueba, // se debe poner el valor que se espera que returne el modulo.
                  conexion->registrar_usuario(id, nombre, apellido, usuario, pass1, correo, telefono)  // se debe enviar como parametro los datos con el que corresponda el valor de prueba o de retorno de el modulo
              ); 

          
          }
          public function testCerrar(){

              
              $this->assertEquals(

                  1,
                  conexion->cerrar()  // se debe enviar como parametro el usuario y la contraseña con el que corresponda el valor de prueba o de retorno de el modulo
              ); 
          }
    }

 ?>
