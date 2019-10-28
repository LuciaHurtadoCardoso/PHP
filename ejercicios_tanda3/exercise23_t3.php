<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise23/tanda3</title>
</head>
<body>
    <p>Este programa determina cuantos números se han introducido, la suma de estos y la media de los mismos.</p> 
    <p>Vaya introduciendo números (el programa parará cuando la suma de los números supere los 1000).</p>
    <?php
        if (!isset($_POST['num'])) {
            $num = 0;
            $numerosTotal = 0;
            $suma =0;
        } else {
            $num = $_POST['num'];
            $numerosTotal = $_POST['numerosTotal'];
            $suma = $_POST['suma'];
        }
        $suma += $num;
        if ($suma < 1000) {
            $numerosTotal++;    
    ?>
        <form action="exercise23_t3.php" method="post">
        <input type="number" name="num" autofocus>
        <input type="hidden" name="numerosTotal" value="<?php echo $numerosTotal; ?>">
        <input type="hidden" name="suma" value="<?php echo $suma; ?>">
        <input type="submit" value="Aceptar">
        </form>
        <?php
        } else {
            echo "Se han introducido ", $numerosTotal,"<br>";
            echo "La suma total de los números introducidos es ", $suma,"<br>";
            echo "La media de los números introducidos es ", $suma/$numerosTotal;
        }
    ?>
    <p><a href="exercise23_t3.php"> Volver</a></p>
</body>
</html>