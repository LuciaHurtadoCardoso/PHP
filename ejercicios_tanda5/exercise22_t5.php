<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Máximo del array</title>
</head>

<body>
    <h1>Máximo del array</h1>
    <?php
    function maximoArrayInt($array)
    {
        $maximo = max($array);
    
        return $maximo;
    }
    $array = [4,3,2,5,7];
    $maximo = maximoArrayInt($array);
    echo "El número más grande del array ".$array." es: ".$maximo;
    ?>
</body>

</html>