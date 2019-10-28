<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise19/tanda2</title>
</head>
<body>
    <?php
    $num = $_POST['num'];
    $numReves = strrev($num);
    if($num==$numReves){
        echo "El número introducido es capicúa";
    }else{
        echo "El número introducido no es capicúa";
    }
    ?>
    <br><br>
    <p><a href="exercise19_t2.html">Volver</a></p>
</body>
</html>