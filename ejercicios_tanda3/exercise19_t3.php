<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise19/tanda3</title>
</head>
<body>
    <?php
        $altura = $_POST['altura'];
        $figura = $_POST['figura'];
        echo "<pre>";
        for($i = 1; $i <= $altura; $i++){
            $espaciosBlanco = $altura - $i;
            $pinto = $altura - $espaciosBlanco;

            for($j = 1; $j <= $espaciosBlanco; $j++){
                echo "&nbsp";
            }
            for($k = 0; $k < $pinto; $k++){
                echo $figura;
            }
            for($k = 1; $k < $pinto; $k++){
                echo $figura;
            }
            echo "<br>";
        }
        echo "</pre>";

    ?>
    <p><a href="exercise19_t3.html"> Volver</a></p>
</body>
</html>