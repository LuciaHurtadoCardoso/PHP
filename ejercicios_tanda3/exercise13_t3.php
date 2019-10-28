<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise13/tanda3</title>
</head>
<body>
    <p>Este programa determina cuantos números positivos y cuantos negativos has introducido.</p> 
    <p>Vaya introduciendo números (puede parar introduciendo un número negativo).</p>
    <?php
        if (!isset($_POST['num'])) {
            $num = 0;
            $cuentaNum = 0;
            $positivos = 0;
        } else {
            $num = $_POST['num'];
            $cuentaNum = $_POST['cuentaNum'];
            $positivos = $_POST['positivos'];
            $cuentaNum++;
            if($num >= 0){
                $positivos++;
            }
        }
        if($cuentaNum < 10){
        
    ?>
        <form action="exercise13_t3.php" method="post">
        <input type="number" name="num" autofocus>
        <input type="hidden" name="cuentaNum" value="<?php echo $cuentaNum; ?>">
        <input type="hidden" name="positivos" value="<?php echo $positivos; ?>">
        <input type="submit" value="Aceptar">
        </form>
        <?php
        }
        if($cuentaNum == 10){
            echo "En la relación de números introducida hay ", $positivos, " números positivos y ", 10-$positivos, " números negativos";
        }
    ?>
    <p><a href="exercise13_t3.php"> Volver</a></p>
</body>
</html>