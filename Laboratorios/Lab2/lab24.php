<html>
<head>
	<title>Laboratorio 2.4</title>
</head>
<body>
	<?php
    //Creacion del arreglo array("clave" => "valor")
    $personas = array("Juan" => "Panama",
    "Jhon" => "USA",
    "Erica" => "Finlandia",
    "Kusanagi" => "Japon");

    //Recorrer todo el arreglo
    foreach($personas as $personas => $pais) {
      print "$personas es de $pais </br>";
    }

    //impresion especifica
    echo "<br>" . $personas["Juan"];
    echo "<br>" . $personas["Erica"];
  ?>
</body>
</html>