<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coordenadas</title>
</head>
<body>
    <h1>Coordenadas</h1>
    <?php
    $bidimensional = array(array(5, 4, 6, 7), array(3, 2, 9, 8), array(5, 1, 6, 3));
    function coordenadasEnArrayBiInt($bidimensional, $numero)
    {
        $indiceNumero = array_search($numero, $bidimensional);
        if(!is_numeric($indiceNumero))
        {
            return "El número no se encuentra en el array bidimensional";
        }
        else
        {
            return $indiceNumero;
        }
        
    }
    $numero = 1;
    $coordenadas = coordenadasEnArrayBiInt($arrayPruebaDos,$numero);
    echo var_dump($coordenadas);
    ?>
</body>
</html>