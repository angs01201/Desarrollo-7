<?php

include('../class_lib.php');

$num = $_POST['numero'];

$f = new factorial($num);

$factorial = $f->obtenerFactorial();

echo "<p>El Factorial de $num es: <strong>$factorial</strong></p>";