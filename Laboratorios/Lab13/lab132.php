<?php
    if (array_key_exists('enviar', $_POST)) {
        $expire = time() + 60* 5;
        setcookie('user', $_REQUEST['visitante'], $expire);
        header('Refresh:0');
    }
    
?>

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
    <h1>Creacion de Cookies</h1>
    <h2>La Coockie "User" tendrá solo 5 minutos de duración</h2>
    <?php
        if (isset($_COOKIE['user'])) {
            print("<br>Hola <b>". $_COOKIE['user'] ."</b> gracias por visitar nuestro sitio web</br>");
        } else { 
    ?>
    <form action="lab132.php" name="formcoockie" method="POST">
        <br>Hola, Primera vez que te vemos por nuestro sitio web ¿Cómo te llamas?
        <input type="text" name="visitante">
        <input type="submit" name="enviar" value="Gracias por identificarse">
        <br>
    </form>
    <?php
        } 
    ?>
    <br>
    <a href="lab133.php">Continuar...</a>
</body>
</html>