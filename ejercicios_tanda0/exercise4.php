<?php
$horas = ["08:20", "09:20", "10:20", "-", "10:50", "11;50", "12;50", "13;50"];
$dias = ["", "LUNES", "MARTES", "MIÉRCOLES", "JUEVES", "VIERNES"];
$lunes = ["DWES", "DWES", "DWES", "REC", "DWEC", "DWEC", "DWEC"];
$martes = ["EIE", "EIE", "DAW", "REC", "DWI", "DWI", "DWI"];
$miercoles = ["DWI", "DWI", "DWES", "REC", "DWES", "DWES", "EIE"];
$jueves = ["DWI", "DWI", "DWI", "REC", "DAW", "DAW", "EIE"];
$viernes = ["DWES", "DWES", "DWEC", "REC", "DWEC", "DWEC", "DWI"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercise 3</title>
</head>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
}
</style>
<body>
    <table>
 
    <?php

        echo "<tr>";
            for($b = 0; $b < sizeof($dias); $b++)
            {
                echo "<th> $dias[$b] </th>";
            }
        echo "</tr>";
        
            for($b = 0; $b < 7; $b++)
            {
                echo "<tr>";

                echo "<th> $horas[$b] </th>";
                echo "<td> $lunes[$b] </td>";
                echo "<td> $martes[$b] </td>";
                echo "<td> $miercoles[$b] </td>";
                echo "<td> $jueves[$b] </td>";
                echo "<td> $viernes[$b] </td>";

                echo "</tr>"; 
            }
    ?>
    </table>
</body>
</html>