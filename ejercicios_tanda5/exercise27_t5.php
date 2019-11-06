<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rota n posiciones derecha en el array</title>
</head>
<body>
    <h1>Rota n posiciones a la derecha en el array</h1>
    <?php
    function rotaDerechaArrayint($posiciones,$array)
    {
        for($i = 0; $i < $posiciones; $i++)
        {
            $ultimo = array_pop($array);
            array_unshift($array,$ultimo);
        }
    
        return $array;
    }
    
    $array = [4,2,5,7,2,42];
    $posiciones = 2;
    $arrayRotado = rotaDerechaArrayint($posiciones,$array);
    var_dump($array);
    echo "<br>";
    var_dump($arrayRotado);
    ?>
</body>
</html>