<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercise4/tanda1</title>
</head>
<body>
<?php
    $operaciones = array ("Suma", "Restar", "Multiplicar", "Dividir");
    $valor = $_REQUEST["operacion"];
    $a = $_POST['a'];
    $b = $_POST['b'];
    if($operaciones[$valor] == "Suma")
    {
        echo $a, " + ", $b, " = ", round($a+$b,2);
    }
    else if($operaciones[$valor] == "Restar")
    {
        echo $a, " - ", $b, " = ", round($a-$b,2);
    }
    else if($operaciones[$valor] == "Multiplicar")
    {
        echo $a, " x ", $b, " = ", round($a*$b,2);
    }
    else if($operaciones[$valor] == "Dividir")
    {
        echo $a, " / ", $b, " = ", round($a/$b, 2);
    }
?>
<p><a href="exercise4_t1.html">Volver</a></p>
</body>
</html>