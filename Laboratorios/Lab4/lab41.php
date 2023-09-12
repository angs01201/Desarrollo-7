<?php
	$vent = $_POST['ventas'];
	if ($vent<50)
	{
			echo "<img src='imagenes/rojo.jpg'/>";
	}
	else
	{
		if($vent>=50&&$vent<=79)
		{
			echo "<img src='imagenes/amarillo.jpg'/>";
		}
		else
			echo "<img src='imagenes/verde.jpg'/>";
	}
?>