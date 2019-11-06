<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posición en array</title>
</head>

<body>
    <h1>Posición del número en el array</h1>
    <?php
    function posicionEnArray($numero, $array)
    {
        $posicion = array_search($numero, $array);

        return $posicion;
    }

    $array = [5,2,5,19,0];
    $numero = 19;
    $posicion = posicionEnArray($numero, $array);

    if (is_numeric($posicion)) {

        echo "El número ".$numero." se encuentra en la posición: " . $posicion." del array ".$array;
    } else {
        echo "El número no se encuentra en el array";
    }
    ?>
</body>

</html>