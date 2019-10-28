<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercise9/tanda1</title>
</head>
<body>
<?php
    $radio = $_POST['radio'];
    $altura = $_POST['altura'];
    $volumen = (1/3) * pi() * pow($radio, 2) * $altura;
    echo "<p> El volumen del cono con radio ", $radio, " y altura ", $altura, " es ", round($volumen, 2), "</p>";
?>
<p><a href="exercise9_t1.html">Volver</a></p>
</body>
</html>