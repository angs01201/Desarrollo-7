<HTML LANG="es">

<HEAD>
    <TITLE>Laboratorio 11</TITLE>
    <LINK rel="stylesheet" type="text/css" href="css/estilo.css">
</HEAD>

<BODY>
    <H1>Consulta de Noticias</H1>
    <?php
    require_once("class/noticias.php");

    if (isset($_SESSION['usuario_valido'])) {

        $obj_noticia = new noticia();
    $cantidad = $obj_noticia->total_noticias();
    $noticias = $obj_noticia->consultar_noticias();
    
    $pages= ceil($cantidad[0]['count(*)']/5)-1;
    $actualpage = 0;
    
    if(isset($_GET["pag"])){
        $actualpage = intval($_GET["pag"]);
    }

    $nfilas = count($noticias);

    if ($nfilas > 0) {
        print("<TABLE>\n");
        print("<TR>\n");
        print("<TH>Titulo</TH>\n");
        print("<TH>Texto</TH>\n");
        print("<TH>Categoría</TH>\n");
        print("<TH>Fecha</TH>\n");
        print("<TH>Imagen</TH>\n");
        print("<TR>\n");
        $cnt = 0;
        foreach ($noticias as $resultado) {
            print("<TR>\n");
            print("<TD>" . $resultado['id'] . "</TD>\n");
            print("<TD>" . $resultado['titulo'] . "</TD>\n");
            print("<TD>" . $resultado['texto'] . "</TD>\n");
            print("<TD>" . $resultado['categoria'] . "</TD>\n");
            print("<TD>" . date("j/n/y", strtotime($resultado['fecha'])) . "</TD>\n");

            if ($resultado['imagen'] != "") {
                print("<TD><A TARGET='_blank' HREF='img/" . $resultado['imagen'] .
                    "'><IMG BORDER='0' SRC='img/iconotexto.gif'></A></TD>\n");
            } else {
                print("<TD>&nbsp;</TD>\n");
            }
            print("</TR>\n");
            
            $cnt++;
            if($cnt==5){
                break;
            }
        }
        print("</TABLE>\n");
        print("<div class='pages'>");
        print("<a href='lab111.php?pag=0' class='pageslink'><</a>");
        for($i=0;$i<=$pages;$i++){
            $a = $i+1;
            if($actualpage == $i){
                print("<a class='pageslink'>$a</a>");
            }else{
                
                print("<a href='lab111.php?pag=$i' class='pageslink'>$a</a>");
            }
        }
        print("<a href='lab111.php?pag=$pages' class='pageslink'>></a>");
        print("</div>");
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
</BODY>

</HTML>