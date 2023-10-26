<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css">
    
    <script type="text/javascript" language ="javascript" src="jquery-3.1.1.js"></script>
    <script type="text/javascript" language ="javascript" src="jquery.dataTables.min.js"></script>
    <title>Ejemplo DataTable JQuery</title>
</head>

<body>

<script type="text/javascript">
    $(document).ready(function() {
        $('#grid').DataTable({
            "lengtMenu":[5,10,20,50],
            "order": [[0,"asc"]],
            "language":{
                "lengthMenu": "Mostrar _MENU_ registros por pagina",
                "zeroRecords": "No Existen Resultados en su busqueda",
                "info": "Mostrando pagina _PAGE_ de _PAGE_",
                "infoEmpty": "No hay  registro disponibles",
                "infoFiltered": "(Buscando entre _MAX_ registrosen total)",
                "search":"Buscar: ",
                "paginate": {
                              "first": "Primero",
                              "last": "Ultimo",
                              "next": "Siguiente",
                              "previous": "Anterior"  
                            },
            }

        });
        $("*").css("font-family", "arial").css('font-size', '12px');
    });
</script>

    <h1>Consulta de Noticias</h1>

    <?php
        require_once('class/noticias.php');

        $obj_noticia = new noticia();
        $noticias = $obj_noticia->consultarNoticias();

        $nfilas = count($noticias);

        if ($nfilas > 0) {

            print("<table id='grid' class='display' cellspacing='0' >\n");
            print("<thead>");
            print("<tr>\n");
            print("<th>Titulo</th>\n");
            print("<th>Texto</th>\n");
            print("<th>Categoria</th>\n");
            print("<th>Fecha</th>\n");
            print("<th>Imagen</th>\n");
            print("</tr>\n");
            print("</thead>");
            print("<tbody>");

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
                print("</tbody>");
            }

            print("</table>\n");
        } else {
            print("No hay noticias disponibles");
        }
        
    ?>
        

</body>


</html>