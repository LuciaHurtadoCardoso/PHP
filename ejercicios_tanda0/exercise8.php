<!-- PARA PEDIR EL € POR UN FORMULARIO -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercise 8</title>
</head>
<body>
    <form action="exercise8.php" method="get">
    <input type="text" name="euro">
    <input type="submit" value="Enviar">
    </form>
</body>
</html> -->
<!-- PARA ASIGNARLE EL VALOR DEL FORMULARIO A LA VARIABLE EN PHP
$euro = $_GET['euro']; -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercise8</title>
</head>
<body>
<?php
    $euro = 2;
    $pesetas = $euro * 166.386;
    echo $euro."€ son ".$pesetas." pesetas";
?>
</body>
</html>