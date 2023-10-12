<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Laboratorio 9.1</title>
</head>

<body>

    <h1>Consulta de Noticias</h1>

    <form action="lab92.php" method="post" name="formFiltro">
        <br>
        Filtrar por: 
        <select name="campos">
            <option value="texto">Texto</option>
            <option value="titulo">Titulo</option>
            <option value="categoria">Categoria</option>
        </select>
        Con el valor:
        <input type="text" name="valor">
        <input type="submit" name="consultarFiltro" value="Filtrar Datos">
        <input type="submit" name="consultarTodos" value="Ver Todos">
    </form>

    <?php
        require_once('class/noticias.php');

        $obj_noticia = new noticia();
        $noticias = $obj_noticia->consultarNoticias();

        if (array_key_exists('consultarTodos',$_POST)) {
            $obj_noticia = new noticia();
            $noticias = $obj_noticia->consultarNoticias();
        }

        if (array_key_exists('consultarFiltro',$_POST)) {
            $obj_noticia = new noticia();
            $noticias = $obj_noticia->consultar_noticias_filtro($_REQUEST['campos'], $_REQUEST['valor']);
        }

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
        
    ?>
        

</body>


</html>