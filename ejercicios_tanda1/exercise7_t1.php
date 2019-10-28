<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercise7/tanda1</title>
</head>
<body>
<?php
    $dinero = $_POST['dinero'];
    $iva = $_POST['iva'];
    $iva1 = ($dinero*$iva)/100;
    echo "<p> El precio total con iva es: ", round($dinero+$iva1,2), "</p>";
?>
<p><a href="exercise7_t1.html">Volver</a></p>
</body>
</html>