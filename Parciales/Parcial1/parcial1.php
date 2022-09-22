<?php
	$num = $_POST['numero'];
	$mitad = $num/2;
	$multiplicacion=1;
	$n = 0;

	if($num%2 == 0) {
		$matriz = array();

		for($y=0;$y<$num;$y++) {
			for($x=0;$x<$num;$x++) {
				if($y==($mitad-1) || $y==$mitad) {
					$n = rand(101,200);
					$matriz[$y][$x] = $n;
					$multiplicacion = $n*$multiplicacion;

					if($x==0 || $x==($num-1))
						$matriz[$y][$x] = 0;
				}else {
					$matriz[$y][$x] = 0;
				}
			}
		}

		echo "<table border align>";
		for($i=0;$i<$num;$i++){
			echo "<tr>";
			for ($j=0; $j < $num; $j++) { 
				echo "<td>";  
				echo $matriz[$i][$j];
				echo "</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
			echo "La multiplicacion de los numero distintos a 0 es = " . $multiplicacion;
	}else {
		echo "Numero ingresado no es par";
	}

	
?>