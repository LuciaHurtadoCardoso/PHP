<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voltea array</title>
</head>
<body>
    <h1>Voltea array</h1>
    <?php
    function volteaArrayInt($array)
    {
        $arrayReves = array_reverse($array);
    
        return $arrayReves;
    }
    
    $array = [7,32,5,2,5];
    $arrayVolteado = volteaArrayInt($array);
    echo "Array original: ";
    echo "<br>";
    var_dump($array);
    echo "<br>";
    echo "Array volteado: ";
    echo "<br>";
    var_dump($arrayVolteado);
    ?>
</body>
</html>