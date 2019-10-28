<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise15/tanda2</title>
</head>
<body>
    <?php
    $puntos = $_POST['P1'] + $_POST['P2'] + $_POST['P3'] + $_POST['P4'] + $_POST['P5'] + $_POST['P6'] + $_POST['P7'] + $_POST['P8'] + $_POST['P9'] + $_POST['P10'];
    if($puntos >= 0 && $puntos < 11){
        echo "¡Enhorabuena! tu pareja parece ser totalmente fiel.";
    }else if($puntos >= 11 && $puntos < 22){
        echo "Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.";
    }else if($puntos >= 22 && $puntos < 31){
        echo "Tu pareja tiene todos los ingredientes de estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües qué es lo que está pasando por su cabeza.";
    }
    ?>
    <br><br>
    <p><a href="exercise15_t2.html">Volver</a></p>
</body>
</html>