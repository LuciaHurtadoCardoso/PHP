<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise12/tanda2</title>
</head>
<body>
    <?php
    $n1 = (int)$_POST['1'];
    $n2 = (int)$_POST['2'];
    $n3 = (int)$_POST['3'];
    $array =[$n1, $n2, $n3];
    sort($array);

    echo "Los número introducidos ordenados quedaría de la siguiente forma: ";
    for($i = 0; $i < sizeof($array); $i++)
    {
        if($i == sizeof($array)-1)
        {
            echo $array[$i];
        }else{
            echo $array[$i],", ";
        }
    }
    ?>
    <br><br>
    <p><a href="exercise13_t2.html">Volver</a></p>
</body>
</html>