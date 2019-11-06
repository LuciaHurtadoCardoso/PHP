<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rota n posiciones izquierda en el array</title>
</head>
<body>
    <h1>Rota n posiciones a la izquierda en el array</h1>
    <?php
    function rotaIzquierdaArrayint($posiciones,$array)
    {
        for($i = 0; $i < $posiciones; $i++)
        {
            $primero = array_shift($array);
            array_push($array,$primero);
        }
    
        return $array;
    }
    
    $array = [4,2,5,7,2,42];
    $posiciones = 2;
    $arrayRotado = rotaIzquierdaArrayint($posiciones,$array);
    var_dump($array);
    echo "<br>";
    var_dump($arrayRotado);
    ?>
</body>
</html>