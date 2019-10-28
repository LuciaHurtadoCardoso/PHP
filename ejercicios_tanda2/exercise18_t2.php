<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise18/tanda2</title>
</head>
<body>
    <?php
    $num = $_POST['num'];
    if($num<0){
        $num = -$num;
    }
    echo "El número introducido tiene ",strlen($num)," cifras";
    ?>
    <br><br>
    <p><a href="exercise18_t2.html">Volver</a></p>
</body>
</html>