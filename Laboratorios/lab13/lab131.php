<?php
    if (isset($_COOKIE['contador'])) {
        setcookie('contador', $_COOKIE['contador'] + 1, time() + 365*24*60*60);
        $mesnsaje = 'Gracias por visitarnos. Número de visitas: ' .$_COOKIE['contador'];
    } else {
        //Caduca en un año
        setcookie('contador', 1, time() + 365*24*60*60);
        $mesnsaje = 'Bienvenido a nuestro sitio web';
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
    <h1>Contador de visitas con Cookies</h1>
    <p>
        <h3><?php echo $mesnsaje; ?></h3>
    </p>
</body>
</html>