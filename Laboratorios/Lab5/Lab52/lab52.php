<?php
	if(is_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'])) {
		$nombreDirectorio = "archivos/";
		$nombrearchivo = $_FILES['nombre_archivo_cliente']['name'];
		$nombreCompleto = $nombreDirectorio . $nombrearchivo;
		$tamano = $_FILES['nombre_archivo_cliente']['size']; // Obtiene el tamaño del archivo.
		$formatosPermitidos = array('png','jpg' ,'jpeg','gif'); // Guarda extensiones en un arreglo.
		$extension = pathinfo($nombrearchivo,PATHINFO_EXTENSION); // Obtiene la extension del archivo.
		
		if(is_file($nombreCompleto)) {
			$idUnico = time();
			$nombrearchivo = $idUnico . "-" . $nombrearchivo;
			echo "Archivo repetido, se cambiara el nombre a $nombrearchivo
			<br><br>";
		}

		if($tamano > 1000000) { // Compara que el tamaño del archivo no sea mayor a 1MB.
			echo "Tu archivo no puede ser mayor a 1 MB, intenta de nuevo por favor";
		}else if(!in_array($extension, $formatosPermitidos)) { // Valida que la extension del archivo sea de un tipo especifico.
			echo "No se ha podido subir el archivo. El archivo debe ser de formato .png, .jpg, .jpeg o .gif";
		}else {
			move_uploaded_file ($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio . $nombrearchivo);
			echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
		}
	}else {
		echo "No se ha podido subir el archivo <br>";
	}
?>