<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise15/tanda3</title>
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
        $base = $_POST['base'];
        $exp = $_POST['exponente'];
        echo "<table>";
        for($i = 1; $i <= $exp; $i++){
            echo "<tr><td>",$base,"<sup>",$i,"</sup>","</td><td>",pow($base,$i),"</td></tr>";
        }
        echo "</table>";
    ?>
    <p><a href="exercise15_t3.html"> Volver</a></p>
</body>
</html>