<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>

		<?php
		$NumeroEstudiantes = $_POST['NEstudiantes'];
		if ($NumeroEstudiantes == 2) {
		?>

		 <form name="Calculo" method="POST" action="TheChosen2.php">
		 	Código del primer estudiante: <input type="text" name="Codigo1" value="" placeholder="Insertar valor">
		 	<br>
			Nota del primer estudiante: <input type="text" name="Nota1" value="" placeholder="Insertar valor">
		 	<br>
		 	Código del segundo estudiante: <input type="text" name="Codigo2" value="" placeholder="Insertar valor">
		 	<br>
			Nota del segundo estudiante: <input type="text" name="Nota2" value="" placeholder="Insertar valor">
		 	<br>
		 	<button type="submit" name="Calcular">Calcular</button>
		 	<button type="reset" name="button">Limpiar</button>

			<?php
		}
		if ($NumeroEstudiantes == 3 ) {
			 ?>

			 <form name="Calculo" method="POST" action="TheChosen3.php">
			 	Código del primer estudiante: <input type="text" name="Codigo1" value="" placeholder="Insertar valor">
			 	<br>
				Nota del primer estudiante: <input type="text" name="Nota1" value="" placeholder="Insertar valor">
			 	<br>
			 	Código del segundo estudiante: <input type="text" name="Codigo2" value="" placeholder="Insertar valor">
			 	<br>
				Nota del segundo estudiante: <input type="text" name="Nota2" value="" placeholder="Insertar valor">
			 	<br>
				Código del tercer estudiante: <input type="text" name="Codigo3" value="" placeholder="Insertar valor">
			 	<br>
				Nota del tercer estudiante: <input type="text" name="Nota3" value="" placeholder="Insertar valor">
			 	<br>
			 	<button type="submit" name="Calcular">Calcular</button>
			 	<button type="reset" name="button">Limpiar</button>

				<?php
			}
			if ($NumeroEstudiantes == 4 ) {
				 ?>

				 <form name="Calculo" method="POST" action="TheChosen4.php">
				 	Código del primer estudiante: <input type="text" name="Codigo1" value="" placeholder="Insertar valor">
				 	<br>
					Nota del primer estudiante: <input type="text" name="Nota1" value="" placeholder="Insertar valor">
				 	<br>
				 	Código del segundo estudiante: <input type="text" name="Codigo2" value="" placeholder="Insertar valor">
				 	<br>
					Nota del segundo estudiante: <input type="text" name="Nota2" value="" placeholder="Insertar valor">
					<br>
					Código del tercer estudiante: <input type="text" name="Codigo3" value="" placeholder="Insertar valor">
				 	<br>
					Nota del tercer estudiante: <input type="text" name="Nota3" value="" placeholder="Insertar valor">
				 	<br>
					Código del cuarto estudiante: <input type="text" name="Codigo4" value="" placeholder="Insertar valor">
				 	<br>
					Nota del cuarto estudiante: <input type="text" name="Nota4" value="" placeholder="Insertar valor">
					<br>
				 	<button type="submit" name="Calcular">Calcular</button>
				 	<button type="reset" name="button">Limpiar</button>

					<?php
				}
					 ?>






		</form>

	</body>
</html>
