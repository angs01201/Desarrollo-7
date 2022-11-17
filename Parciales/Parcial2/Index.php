<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Parcial 2</title>
	</head>

	<body>

		<h1>Calcular Factorial</h1>

		<form name="formularioDatos" method="post" action="Index.php">
			<br/>
			Introduzca el numero  <input type ="text" name="numero" value="">
			<br/><br/>
			<input name="calcular" value="Calcular" type="submit"/>
		</form>

		<?php
			require_once('class/factorial.php');

			$obj_factorial = new factorial();
			$factorialTabla = $obj_factorial->consultarFactorial();

			if (array_key_exists('calcular',$_POST)) {
				$obj_factorial = new factorial();
				$factorial = $obj_factorial->obtieneFactorial($_REQUEST['numero']);
			}

			$nfilas = count($factorialTabla);

			if ($nfilas > 0) {

				print("<table >\n");
				print("<tr>\n");
				print("<th>ID</th>\n");
				print("<th>Numero</th>\n");
				print("<th>Factorial</th>\n");
				print("<th>Sumatoria</th>\n");
				print("</tr>\n");

				foreach ($factorialTabla as $resultado) {
					print("<tr>\n");
					print("<td>". $resultado['ID'] ."</td>\n");
					print("<td>". $resultado['N'] ."</td>\n");
					print("<td>". $resultado['Factorial'] ."</td>\n");
					print("<td>". $resultado['Sumatoria'] ."</td>\n");
					print("</tr>\n");
				}

				print("</table>\n");
			} else {
				print("No hay factorial disponibles");
			}
				
		?>
	</body>
</html>