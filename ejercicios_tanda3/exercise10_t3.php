<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise10/tanda3</title>
</head>
<body>
    <p>Este programa calcula la media de los números positivos introducidos.</p> 
    <p>Vaya introduciendo números (puede parar introduciendo un número negativo).</p>
    <?php
        if (!isset($_POST['num'])) {
            $num = 0;
            $total = 0;
            $numerosTotal = 0;
        } else {
            $num = $_POST['num'];
            $total = $_POST['total'];
            $numerosTotal = $_POST['numerosTotal'];
        }
        if ($num >= 0) {
            $total += $num;
            $numerosTotal++;
    ?>
        <form action="exercise10_t3.php" method="post">
        <input type="number" name="num">
        <input type="hidden" name="total" value="<?php echo $total; ?>">
        <input type="hidden" name="numerosTotal" value="<?php echo $numerosTotal; ?>">
        <input type="submit" value="Aceptar">
        </form>
        <?php
        } else {
    ?>
        <br><br>La media de los números introducidos es <?php echo $total / ($numerosTotal - 1); ?>
    <?php
        }
    ?>
    <p><a href="exercise10_t3.php"> Volver</a></p>
</body>
</html>