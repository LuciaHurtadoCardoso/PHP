<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise11/tanda3</title>
    <style>
    table {
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid black;
        text-align: center;
    }
    </style>
</head>
<body>
    <?php
        $num = $_POST['num'];
        echo "<table>";
        echo "<tr><th>Número</th><th>Cuadrado</th><th>Cubo</th></tr>";
        for($i = 0; $i < 5; $i++){
            echo "<tr><td>",$num+$i,"</td><td>",pow($num+$i,2),"</td><td>",pow($num+$i,3),"</td></tr>";
        }
        echo "</table>";
    ?>
    <p><a href="exercise11_t3.html"> Volver</a></p>
</body>
</html>