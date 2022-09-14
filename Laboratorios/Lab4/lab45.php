<?php
$tam = (int)$_REQUEST['tamaño'];
$arreglo;
$temp=0;
$numero="numero";
if($tam%3==0)
{
    if(array_key_exists('enviar1', $_POST))
    {
		for($i = 1; $i <= $tam; $i++)
		{
			if($i%3==0)
			{
				$arreglo[$i]=$temp;
				$temp=0;
			}
			else
			{
				$arreglo[$i]=$_REQUEST[$numero.$i];
				$temp=$_REQUEST[$numero.$i]+$temp;
			}
		}
    echo '<pre>'; 
	print_r($arreglo); 
	echo '</pre>';
	}
	else
	{
		echo"<form action = 'lab45.php' method = 'post'>";	
	    for($i = 1; $i <= $tam; $i++)
	    {	
	        if($i%3==0)
			{
				
			}
			else
			{
				echo "Numero$i: <input type = 'text' name='numero$i'><br>";
			}
            $valor=$i;
	    }
		
	    echo"<input type = 'submit' name='enviar1' value='Enviar datos'>";
		echo"<input type = 'hidden' name='tamaño' value='$tam'>";
        echo"</form>";	
	}
}
else
{
	echo "<br/>El numero ingresado debe ser divisible entre 3";
}	

?>