<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercise3/tanda1</title>
</head>
<body>
<?php
    $pesetas = $_POST['peseta'];
    $euro = $pesetas / 166.386;
    echo $pesetas, " pesetas son ", round($euro,2), "€";
?>
<p><a href="exercise3_t1.html">Volver</a></p>
</body>
</html>