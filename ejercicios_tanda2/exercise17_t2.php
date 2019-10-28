<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise17/tanda2</title>
</head>
<body>
    <?php
    $num = $_POST['num'];
    $primera = 0;
    $aux = $num;
    if($num<0){
        $num = -$num;
    }
    if($num < 10){
        $primera = $num;
    }else if($num < 100){
        $primera = $num/10;
    }else if($num < 1000){
        $primera = $num /100;
    }else if($num < 10000){
        $primera = $num/1000;
    }else if($num < 1000000){
        $primera = $num/10000;
    }
    echo "La primera cifra de ",$aux," es ",floor($primera);
    ?>
    <br><br>
    <p><a href="exercise17_t2.html">Volver</a></p>
</body>
</html>