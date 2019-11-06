<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fila array bidimensional</title>
</head>

<body>
    <h1>Fila array bidimensional</h1>
    <?php
    $bidimensional = array(array(5, 4, 6, 7), array(3, 2, 9, 8), array(5, 1, 6, 3));
    function filaDeArrayBiInt($bidimensional)
    {
        $filaArrayBi = sizeof($bidimensional);

        return $filaArrayBi;
    }

    echo filaDeArrayBiInt($bidimensional);
    ?>
</body>

</html>