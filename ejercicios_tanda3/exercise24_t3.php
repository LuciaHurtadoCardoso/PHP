<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise24/tanda3</title>
    <style>
        *{
            font-family: Courier;
        }
    </style>
</head>
<body>
    <?php
        $altura = $_POST['altura'];
        echo "<pre>";
        for($i = 1; $i <= $altura; $i++){
            $espaciosBlanco = $altura - $i;
            $pinto = $altura - $espaciosBlanco;
            for($j = 1; $j <= $espaciosBlanco; $j++){
                echo "&nbsp";
            }
            for($k = 1; $k <= $pinto; $k++){
                echo $k;
            }
            for($k = 1; $k < $pinto; $k++){
                echo $pinto-$k;
            }
            echo "<br>";
        }
        echo "</pre>";
    ?>
    <p><a href="exercise24_t3.html"> Volver</a></p>
</body>
</html>