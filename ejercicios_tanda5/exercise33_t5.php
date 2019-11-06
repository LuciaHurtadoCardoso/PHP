<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Punto de silla</title>
</head>
<body>
    <h1>Punto de silla</h1>
    <?php
    function esPuntoDeSilla($array, $numero)
    {
        $puntoDeSilla = false;
        $minimoFila = min($array[0]);
        echo $minimoFila;
        for($i = 1; $i < sizeof($array); $i++)
        {
            if($minimoFila > min($array[$i]))
            {
                $minimoFila = $array[$i];
                $maximoColumna = $array[$i];
                for($j = 0; $j < sizeof($array[$i]); $j++)
                {
                    
                }
                $posicionMinimo = $i;
            }
        }
    
        $columna = array_search($minimoFila, $array);
        echo "<br>".$columna;
        if($maximoColumna != max($array[$posicionMinimo][$columna]))
        {
            $puntoDeSilla = true;
        }
        
        return $puntoDeSilla;
    }
    
    $numero = 4;
    if(esPuntoDeSilla($arrayPruebaDos,$numero))
    {
        echo $numero." es punto de silla";
    }
    else{
        echo $numero." no es punto de silla";
    }
    ?>
</body>
</html>