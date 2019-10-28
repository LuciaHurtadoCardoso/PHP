<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise11/tanda2</title>
</head>
<body>
    <?php
    $hora = $_POST['hora'];
    $minutos = $_POST['minutos'];
    $segundosTotales = ($hora*3600) + ($minutos*60);
    $segundosParaMedia = 86400 - $segundosTotales;
    echo "Quedan ", $segundosParaMedia, " segundos para media noche";
    ?>
    <br><br>
    <p><a href="exercise11_t2.html">Volver</a></p>
</body>
</html>