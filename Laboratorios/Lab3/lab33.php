<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Laboratorio 3.3</title>
	</head>
	<body>
		<?php
			if(array_key_exists('enviar',$_POST)) { 
				if($_REQUEST['Apellido'] != "") {
					echo "El apellido Ingresado es: $_REQUEST[Apellido]";
				}else {
					echo "Favor coloque el apellido";
				}

				echo "<BR>";

				if($_REQUEST['Nombre'] != "") {
					echo "El nombre Ingresado es: $_REQUEST[Nombre]";
				}else {
				echo "Favor coloque el nombre";
				}
			}else {
		?>
    <form ACTION="lab33.php" METHOD="post">
      Nombre: <input type="text" name="Nombre">
      Apellido: <input type="text" name= Apellido>
      <input type="submit" name="enviar" value="Enviar Datos">
    </form>
    <?php
      }
    ?>
	</body>
</html>