<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nº capicúa</title>
</head>

<body>
    <h1>Números capicúa entre 1 y 99999</h1>
    <?php
    function capicua()
    {
        $arrayCapicua = array();
        for ($i = 1; $i <= 99999; $i++) {
            $numeroCadena = (string) $i;
            $numeroCadenaReverse = strrev($numeroCadena);
            if ($numeroCadena === $numeroCadenaReverse) {
                array_push($arrayCapicua, $i);
            }
        }

        return $arrayCapicua;
    }

    var_dump(capicua());
    ?>
</body>

</html>