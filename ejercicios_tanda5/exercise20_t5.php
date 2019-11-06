<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Genera array</title>
</head>

<body>
    <h1>Genera array</h1>
    <?php
    function generaArrayInt($minimo, $maximo)
    {
        $array = array();

        for ($i = $minimo; $i <= $maximo; $i++) {
            $numeroAleatorio = rand($minimo, $maximo);
            array_push($array, $numeroAleatorio);
        }

        return $array;
    }
    $minimo = 2;
    $maximo = 8;
    var_dump(generaArrayInt($minimo, $maximo));
    ?>
</body>

</html>