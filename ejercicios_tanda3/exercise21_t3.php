<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise21/tanda3</title>
</head>
<body>
    <p>Este programa determina cuantos números se han introducido, la media de los impares y el mayor de los pares.</p> 
    <p>Vaya introduciendo números (puede parar introduciendo un número negativo).</p>
    <?php
        if (!isset($_POST['num'])) {
            $num = 0;
            $numerosTotal = 0;
            $totalImpares = 0;
            $sumaImpares =0;
            $maxPar = 0;
        } else {
            $num = $_POST['num'];
            $numerosTotal = $_POST['numerosTotal'];
            $totalImpares = $_POST['totalImpares'];
            $sumaImpares = $_POST['sumaImpares'];
            $maxPar = $_POST['maxPar'];
        }
        if ($num >= 0) {
            $numerosTotal++;
            if($num % 2 != 0){
                $totalImpares++;
                $sumaImpares += $num;
            }else{
                if($maxPar < $num){
                    $maxPar = $num;
                }
            }
    ?>
        <form action="exercise21_t3.php" method="post">
        <input type="number" name="num" autofocus>
        <input type="hidden" name="numerosTotal" value="<?php echo $numerosTotal; ?>">
        <input type="hidden" name="totalImpares" value="<?php echo $totalImpares; ?>">
        <input type="hidden" name="sumaImpares" value="<?php echo $sumaImpares; ?>">
        <input type="hidden" name="maxPar" value="<?php echo $maxPar; ?>">
        <input type="submit" value="Aceptar">
        </form>
        <?php
        } else {
            echo "Se han introducido ", $numerosTotal,"<br>";
            echo "El número par más grande introducido es ", $maxPar,"<br>";
            echo "La media de los números impares introducidos es ", $sumaImpares/$totalImpares;
        }
    ?>
    <p><a href="exercise21_t3.php"> Volver</a></p>
</body>
</html>