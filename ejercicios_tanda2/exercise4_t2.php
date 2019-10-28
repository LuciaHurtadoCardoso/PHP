<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercise4/tanda2</title>
</head>
<body>
    <?php
        $horas = $_POST['horas'];
        $salario = 0;
        if($horas <= 40)
        {
            $salario = $horas*12;
        }
        else{
            $horasExtra = $horas - 40;
            $salario = (40*12)+($horasExtra*16);
        }
        echo "<p> El salario semanal que corresponde a ", $horas, " es de ", $salario, "€ </p>"
    ?>
    <p><a href="exercise4_t2.html">Volver</a></p>
</body>
</html>