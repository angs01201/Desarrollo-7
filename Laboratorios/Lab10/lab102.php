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

        $obj_votos = new votos();
        $resultado_votos = $obj_votos->listarVotos();

        foreach ($resultado_votos as $resultado_voto) {
            $votos1 = $resultado_voto['votos1'];
            $votos2 = $resultado_voto['votos2'];
        }

        $totalVotos = $votos1 + $votos2;

        
        print("<table>\n");

        print("<tr>\n");
        print("<th>Respuesta</th>\n");
        print("<th>Votos</th>\n");
        print("<th>Porcentaje</th>\n");
        print("<th>Representacion grafica</th>\n");
        print("</tr>\n");

        $porcentaje = round(($votos1/$totalVotos)*100,2);
        print("<tr>\n");
        print("<td class='izquierda'>Si</td>\n");
        print("<td class='derecha'>$votos1</td>\n");
        print("<td class='derecha'>$porcentaje%</td>\n");
        print("<td class='izquierda' width='400'><img src='img/puntoamarillo.gif' height='10' width='". $porcentaje*4 ."'></td>\n");
        print("</tr>\n");

        $porcentaje = round(($votos2/$totalVotos)*100,2);
        print("<tr>\n");
        print("<td class='izquierda'>No</td>\n");
        print("<td class='derecha'>$votos2</td>\n");
        print("<td class='derecha'>$porcentaje%</td>\n");
        print("<td class='izquierda' width='400'><img src='img/puntoamarillo.gif' height='10' width='". $porcentaje*4 ."'></td>\n");
        print("</tr>\n");

        print("</table>\n");
        print("<p>Numero total de votos emitidos: $totalVotos</p>\n");
        print("<p><a href='lab101.php'>Pagina de votacion</a></p>\n");
?>

</body>

</html>