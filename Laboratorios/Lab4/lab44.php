<?php
$cantidad=$_REQUEST['cantidad'];
$numero="numero";
$arreglo;
if(array_key_exists('enviar1', $_POST))
{
	for($i = 1; $i <= $cantidad; $i++)
	{
		
		
		if($_REQUEST[$numero.$i]%2==0)
		{
			$arreglo[$i]=$_REQUEST[$numero.$i];
		}
		else
		{
			echo"Ingrese numeros pares";
			$i=$cantidad;
		}
		
	}
}
else
{
    echo"<form action = 'lab44.php' method = 'post'>";
	for($i = 1; $i <= $cantidad; $i++)
	{
		echo "Numero$i: <input type = 'text' name='numero$i'><br>";
	}
	echo"<input type = 'submit' name='enviar1' value='Enviar datos'>";
	echo"<input type = 'hidden' name='cantidad' value='$cantidad'>";
    echo"</form>";	
}
?>
