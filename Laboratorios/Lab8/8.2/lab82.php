<?php

include('../class_lib.php');

$porcentaje = $_POST['porcentaje'];

$p = new ventas($porcentaje);

$icono = $p->obtenerIcono();

echo "<center><img src='assets/img/$icono'></center>";

