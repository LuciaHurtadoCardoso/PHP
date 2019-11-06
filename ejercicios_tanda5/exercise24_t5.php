<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>¿Está el número?</title>
</head>
<body>
    <h1>¿Está el número?</h1>
    <?php
    function estaEnArrayInt($array,$numero)
    {
        $estaEnArray = in_array($numero,$array);
    
        return $estaEnArray;
    }
    
    $array = [1, 2, 3, 19, 5, 9];
    $numero = 19;
    if(estaEnArrayInt($array,$numero)){
        echo "El número ".$numero." está dentro del array ".$array;
    }
    else
    {
        echo "El número ".$numero." no está dentro del array ".$array;
    }
    ?>
</body>
</html>