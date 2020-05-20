<?php
require_once 'Modelo\conexion.php';


class PruebaTest extends \PHPUnit_Framework_TestCase {


	/**
	* @expectedExeception MyException
	* @expectedExeceptionCode
	*/
	public function testLogin(){

		$con = new conexion;
		$login = $con->login("Root","pass");

		$this->assertEquals(2, $login);
	}


	public function testRegistro(){

		$con= new conexion;
		//cada vez que se corre esta prueba deberá cambiarse el id, que en este caso es 187256
		$user = $con->registrar_usuario(1782576,"Manuel","Albarran","ManuelSobrado7","password","Manuel.gv2012@gmail.com",3507643483);

		$this->assertEquals(0, $user);

  }

	public function testConexion(){
		$conexion = new conexion;
		$con = $conexion->__construct();

		$this->assertEquals(1,$con);

	}

	public function testCerrar(){
		$conexion = new conexion;
		$close = $conexion->cerrar();

		$this->assertEquals(1, $close);

	}

	public function testAgregarProducto(){
		$conexion = new conexion;
		$addProducts = $conexion->agregarProducto(158887,"Pan africano","300","De africa",1,10,"05/05/2020");

		$this->assertEquals(0, $addProducts);

	}
	/**
	* @group pruebas
	*
	*/
	public function testCalcular_Cantidad(){
		$conexion = new conexion;
		$sumProducts = $conexion->CalcularCantidad();

		$this->assertEquals(0, $sumProducts);

	}

	public function testVentas(){
		$conexion = new conexion;
		$Sells = $conexion->VentasDiarias("2020/05/14");

		$this->assertEquals(0, $Sells);

	}

	public function testEliminarProd(){
		$conexion = new conexion;
		$deleteProducts = $conexion->eliminarProducto("Roscon");

		$this->assertEquals(0, $deleteProducts);

	}

	/**
	* @testdox
	*
	*/
	public function testEditarProd(){
		$conexion = new conexion;
		$editProducts = $conexion->editarProducto("hola",200,"prueba");

		$this->assertEquals(0, $editProducts);

	}

	public function testListarProd(){
		$conexion = new conexion;
		$ListProducts = $conexion->CalcularCantidad(1);

		$this->assertEquals(0, $ListProducts);

	}

	public function testEditarProd_out(){
		$conexion = new conexion;
		$editProducts = $conexion->editarProducto("hola",200,"prueba");

		$this->expectOutputString(1, $editProducts);

	}

	public function testEditarProd_null(){
		$conexion = new conexion;
		$editProducts = $conexion->editarProducto("hola",200,"prueba");

		$this->assertNull(1);

	}

	public function testCalcular_Cantidad_not_null(){
		$conexion = new conexion;
		$sumProducts = $conexion->CalcularCantidad();

		$this->assertNotNull(0);

	}

	public function testAgregarProducto_same(){
		$conexion = new conexion;
		$addProducts = $conexion->agregarProducto(15887,"Pan africano","300","De africa",1,10,"05/05/2020");

		$this->assertSame(0, $addProducts);
	}

	public function testCalcular_Cantidad_infinite(){
		$conexion = new conexion;
		$sumProducts = $conexion->CalcularCantidad();

		$this->assertInfinite(0);

	}


	public function testCalcular_Cantidad_Emp(){
		$conexion = new conexion;
		$sumProducts = $conexion->CalcularCantidad();

		$this->assertEmpty(0);

	}

	public function testCalcular_Cantidad_Emp_not(){
		$conexion = new conexion;
		$sumProducts = $conexion->CalcularCantidad();

		$this->assertNotEmpty(0);

	}

	public function testCalcular_Cantidad_less(){
		$conexion = new conexion;
		$sumProducts = $conexion->CalcularCantidad();

		$this->assertLessThan(0, $sumProducts);

	}

	public function testCalcular_Cantidad_less_than(){
		$conexion = new conexion;
		$sumProducts = $conexion->CalcularCantidad();

		$this->assertLessThanOrEqual(0, $sumProducts);

	}

	public function testEditarProd_nan(){
		$conexion = new conexion;
		$editProducts = $conexion->editarProducto("hola",200,"prueba");

		$this->assertNan(1);

	}










}
