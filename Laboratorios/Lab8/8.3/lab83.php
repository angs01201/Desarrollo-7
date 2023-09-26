<?php

include('../class_lib.php');

$a = new arreglo(10);

$arr = $a->generarArray();
$posicion = $a->obtenerPosicion();

echo "<h1>Arreglo P1</h1>";
echo '<table border=1>';
    for ($i = 0; $i < count($arr); $i++) {
        echo "<tr>";
        echo "<td>$arr[$i]</td>";
        echo "</tr>";
    }
echo '</table>';

echo "<h3>El valor mas grande está en la posición: </h3> <span>$posicion</span>";