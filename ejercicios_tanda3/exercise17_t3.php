<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise17/tanda3</title>
</head>
<body>
    <?php
        $num = $_POST['num'];
        $suma = 0;
        for($i = $num; $i <= $num+100; $i++){
            $suma = $suma + $i;
        }
        echo "La suma de los 100 números siguientes a ",$num," es ",$suma;
    ?>
    <p><a href="exercise17_t3.html"> Volver</a></p>
</body>
</html>