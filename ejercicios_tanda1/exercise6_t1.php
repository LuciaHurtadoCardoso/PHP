<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercise6/tanda1</title>
</head>
<body>
<?php
    $altura = $_POST['altura'];
    $base = $_POST['base'];
    $area = ($altura*$base)/2;
    echo "<p> El área de un rectángulo es igual a la base * altura / 2 </p>";
    echo "<p> El área de nuestro rectángulo es (", $altura, "x", $base, ")/2 = ", round($area,2), "</p>";
?>
<p><a href="exercise6_t1.html">Volver</a></p>
</body>
</html>