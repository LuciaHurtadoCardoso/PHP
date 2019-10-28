<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercise1/tanda2</title>
</head>
<body>
    <?php
        $horas = ["08:20", "09:20", "10:20", "11:50", "12:50", "13:50"];
        $dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes"];
        $horario = [
            ["DWES", "DWES", "DWES", "DWEC", "DWEC", "DWEC"],
            ["EIE", "EIE", "DAW", "DWI", "DWI", "DWI"],
            ["DWI", "DWI", "DWES", "DWES", "DWES", "EIE"],
            ["DWI", "DWI", "DWI", "DAW", "DAW", "EIE"],
            ["DWES", "DWES", "DWEC", "DWEC", "DWEC", "DWI"]
        ];

        $dia = $_POST['dias'];
        $hora = $_POST['horas'];

        echo "<p> El ", $dias[$dia], " a las ", $horas[$hora], " tienes ", $horario[$dia][$hora], "</p>";
    ?>
    <p><a href="exercise1_t2.html">Volver</a></p>
</body>
</html>