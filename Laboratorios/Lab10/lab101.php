<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Laboratorio 10.1</title>
</head>
<body>
<?php
    require_once("class/votos.php");

    if (array_key_exists("enviar", $_POST)) {
        
        print("<h1>Encuesta. Voto registrado</h1>\n");

        $obj_votos = new votos();
        $resultado_votos = $obj_votos->listarVotos();

        foreach ($resultado_votos as $resultado_voto) {
            $votos1 = $resultado_voto['votos1'];
            $votos2 = $resultado_voto['votos2'];
        }

        $voto = $_REQUEST['voto'];
        if ($voto == "si") {
            $votos1 = $votos1 + 1;
        } elseif ($voto == "no"){
            $votos2 = $votos2 + 1;
        }

        $obj_votos = new votos();
        $resultado = $obj_votos->actualizarVotos($votos1, $votos2);

        if ($resultado) {
            print("<p>Su voto ha sido  registrado. Gracias por participar</p>\n");
            print("<a href= 'lab102.php'>Ver Resultados</a>\n");
        } else {
            print("<a href= 'lab101.php'>Error al actualizar su voto</a>\n");
        }
    } else {
        # code...
    }
    
?>

<h1>Encuesta</h1>

<p>¿Cree ud. que el precio  de la vivienda seguira subiendo al ritmo actual?</p>

<form action="lab101.php" method="POST">
    <input type="radio" name="voto" value="si" checked>si<br>
    <input type="radio" name="voto" value="no">no <br><br>
    <input type="submit" name="enviar" value="votar">
</form>
<br>

<a href="lab102.php">Ver Resultados</a>

</body>

</html>