<!-- Realiza un programa que pida dos números y luego muestre su multiplicación -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercise 1/tanda 1</title>
</head>
<body>
    <?php
        $a = $_POST['a'];
        $b = $_POST['b'];
        $multiply = $a * $b;
        echo "La multiplicación vale ", round($multiply,2);
    ?>
    <p><a href="exercise1_t1.html">Volver</a></p>
</body>
</html>