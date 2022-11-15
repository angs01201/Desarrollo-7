<html>
	<head>
		<title>Laboratorio 20</title>
	</head>
	<body>
	<FORM ACTION="1ab201.php" METHOD="POST">
		Nombre: <INPUT TYPE="TEXT" NAME="nombre" required><br>
		Apellido: <INPUT TYPE="TEXT" NAME="apellido" required><br>
		Email: <INPUT TYPE="email" NAME="email"><br>
		Edad: <INFUT TYPE="number" NAME="edad" min="0" max="120"><br><br>
		<INPUT TYPE = "SUBMIT" NAME="guardar" VALUE="Guardar datos">
	</FORM>


		<?php
			include ("UsuariosMDB. php");
			$usrs = new UsuariosMDB (1);
			
			if(array_key_exists('guardar' $_POST)) {
				$usrs->insertarRegistro($_REQUESTI['nombre'],$_REQUESTI['apellido'],$_REQUESTI['email'],$_REQUESTI['edad']);
				echo "Registro insertado exitosamente <br><br>";
			}
			
			echo "Registros en la coleccion usuarios: <br>";
			$usrs->obtenerRegistros ();
			
		?>
	</body>
</html>