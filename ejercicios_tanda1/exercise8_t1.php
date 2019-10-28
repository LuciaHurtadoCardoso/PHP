<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercise8/tanda1</title>
</head>
<body>
<?php
    $horas = $_POST['horas'];
    $salario = $horas*12;
    echo "<p> El salario semanal total según las horas es de ", round($salario,2), "€ </p>";
?>
<p><a href="exercise8_t1.html">Volver</a></p>
</body>
</html>