<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercise1/tanda4</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Cuadrado y cubo de los números</h1>
    <?php
        $numero = [];
        $cuadrado = [];
        $cubo = [];

        for($i = 0; $i < 20; $i++){
            $numeroRandom = rand(1,100);
            $numero[$i] = $numeroRandom;
            $numeroCuadrado = pow($numeroRandom, 2);
            $numeroCubo = pow($numeroRandom, 3);
            $cuadrado[$i] = $numeroCuadrado;
            $cubo[$i] = $numeroCubo;
        }
        echo "<table>";
        echo "<tr>";
        echo "<th>Número</th>";
        echo "<th>Cuadrado</th>";
        echo "<th>Cubo</th>";
        echo "</tr>";
        for($i = 0; $i < sizeof($numero); $i++){
            echo "<tr>";
            echo "<td>".$numero[$i]."</td>";
            echo "<td>".$cuadrado[$i]."</td>";
            echo "<td>".$cubo[$i]."</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>