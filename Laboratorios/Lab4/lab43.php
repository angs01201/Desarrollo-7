<?php
$repe = true;
$ingresar = false;
$valorMaximo=0;
$num = 0;
	$valor = (int)$_POST['valor'.$num];
	$miarray[]=$valor;
    echo "<br/>   El numero es ". $valor;
for ($i = 1; $i < 20; $i++) 
{
    $valor = (int)$_POST['valor'.$i];
	
	foreach ($miarray as $temp)
	{
		if($temp==$valor)
		{
			echo "<br/><br/>Ingreso un numero repetido, vuelva a llenar el formulario";
			$i=20;
			$c2=$i;
			$repe=false;
			$ingresar=false;
		}
		else
		{
            $ingresar = true;			
		}

	}
	if($ingresar==true)
	{
		$miarray[]=$valor;
	}
	

}
if($repe==true)
{
    foreach ($miarray as $temp)
	{
		if($temp>$valorMaximo)
		{
			$valorMaximo=$temp;
		}

	}
	 echo "<br>El valor máximo es: ".$valorMaximo."<br>";
	 print_r($valorMaximo);
	 print_r($miarray);
}

?>

