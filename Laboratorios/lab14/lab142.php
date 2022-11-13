<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Laboratorio 14.2</title>
</head>

<body>

    <h1>Consulta de Noticias</h1>

    <?php
        require_once('class/noticias.php');

        if (isset($_SESSION['usuario_valido'])) {

            $obj_noticia = new noticia();
            $noticias = $obj_noticia->consultarNoticias();
    
            $nfilas = count($noticias);
    
            if ($nfilas > 0) {
    
                print("<table >\n");
                print("<tr>\n");
                print("<th>Titulo</th>\n");
                print("<th>Texto</th>\n");
                print("<th>Categoria</th>\n");
                print("<th>Fecha</th>\n");
                print("<th>Imagen</th>\n");
                print("</tr>\n");
    
                foreach ($noticias as $resultado) {
                    print("</tr>\n");
                    print("<td>". $resultado['titulo'] ."</td>\n");
                    print("<td>". $resultado['texto'] ."</td>\n");
                    print("<td>". $resultado['titulo'] ."</td>\n");
                    print("<td>". date("j/n/y", strtotime($resultado['categoria'])) ."</td>\n");
    
                    if ($resultado['imagen'] != "") {
                        print("<td><a target='_blank' href='img/". $resultado['imagen'] ."'><img border='0' src='img/iconotexto.gif'></a></td>\n");
                    } else {
                        print("<td>&nbsp;</td>\n");
                    }
                    print("</tr>\n");
                }
    
                print("</table>\n");
                
            } else {
                print("No hay noticias disponibles");
            }
        
            print("<p><a href='login.php'>Menu principal</a></p>");
        }else{
            print("<br><br>\n");
            print("<p align='center'>Acceso no autorizado</p>\n");
            print("<p align='center'>[ <a href='login.php' target='_top'>Conectar</a> ]</p>\n");
        }

       
        
    ?>
    

</body>


</html>