<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Genera array bidimensional</title>
</head>

<body>
    <h1>Genera array bidimensional</h1>
    <?php
    $bidimensional = array(array(5, 4, 6, 7), array(3, 2, 9, 8), array(5, 1, 6, 3));
    function MuestraArrayBidimensional($bidimensional)
    {
        $numeroFilas = sizeof($bidimensional);
        for ($i = 0; $i < $numeroFilas; $i++) {
            $numeroColumnas = sizeof($bidimensional[$i]);
            for ($j = 0; $j < $numeroColumnas; $j++) {
                echo $bidimensional[$i][$j] . " ";
            }
            echo "<br>";
        }
    }
    function generaArrayBiInt($filas, $columnas, $minimo, $maximo)
    {
        $arrayBi = array();
        for ($i = 0; $i < $filas; $i++) {
            for ($j = 0; $j < $columnas; $j++) {
                $arrayBi[$i][$j] = rand($minimo, $maximo);
            }
        }

        return $arrayBi;
    }


    $filas = 3;
    $columnas = 3;
    $minimo = 1;
    $maximo = 99;
    $arrayPrueba = generaArrayBiInt($filas, $columnas, $minimo, $maximo);
    MuestraArrayBidimensional($arrayPrueba);
    ?>
</body>

</html>