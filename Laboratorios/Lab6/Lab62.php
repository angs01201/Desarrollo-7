<?php
	include("class_lib.php")
	// instanciamos un par de objetos cliente
	$clientel = new cliente("Pepe",1);
	$cliente2 = new cliente("Roberto",564);

	//mostramos el numero de cada cliente creado
	echo "<br> El identificador del cliente 1 es: " . $cliente1->dame_numero();
	echo "<br> El identificador del cliente 2 es: " . $cliente2->dame_numero();
?>