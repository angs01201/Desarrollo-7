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
    <h1>Recuperar valor de una Cookies</h1>
    <?php
        if ($_COOKIE['user']) {
            echo "<h2>Bienvenido ". $_COOKIE['user'] ."!</h2><br>";
        }else {
            echo "<h2>Bienvenido invitado!</h2><br>"; 
        }
    ?>
    <br>
    <a href="lab131.php">...Regresar</a>&nbsp;
    <a href="lab134.php">Continuar...</a>
</body>
</html>