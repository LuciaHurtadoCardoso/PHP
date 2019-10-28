<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercise2/tanda1</title>
</head>
<body>
<?php
    $euro = $_POST['euro'];
    $pesetas = $euro * 166.386;
    echo $euro, "€ son ", round($pesetas,2)," pesetas";
?>
<p><a href="exercise2_t1.html">Volver</a></p>
</body>
</html>