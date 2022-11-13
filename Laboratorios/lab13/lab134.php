<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 13</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Eliminar Coockies</h1>
    <?php
        if (isset($_COOKIE['user'])) {
            setcookie('user',"",time()+60*5);
            echo "<h3>La Coockie 'user' ha sido eliminada satisfactoriamente</h3><br>";
        }else {
            echo "<h3>La Coockie 'user' no existe</h3><br>"; 
        }

        if (isset($_COOKIE['contador'])) {
            setcookie('contador','',time()+365*24*60*60);
            echo "<h3>La Coockie 'contador' ha sido eliminada satisfactoriamente</h3><br>";
        }else {
            echo "<h3>La Coockie 'contador' no existe</h3><br>"; 
        }
    ?>
    <br>
    <a href="lab131.php">Volver al contador de visitas</a>&nbsp;
    <a href="lab132.php">Volver al saludo a usuario</a>
</body>
</html>