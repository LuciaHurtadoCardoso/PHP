<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mínimo del array</title>
</head>

<body>
    <h1>Mínimo del array</h1>
    <?php
    function minimoArrayInt($array)
    {
        $minimoArray = min($array);

        return $minimoArray;
    }
    $array = [4,3,2,5,7];
    $minimo = minimoArrayInt($array);
    echo "El número más pequeño del array ".$array." es: ".$minimo;
    ?>
</body>

</html>