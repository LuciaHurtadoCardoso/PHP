<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nº primo entre 1 y 100</title>
</head>

<body>
    <h1>Números primos entre 1 y 100</h1>
    <?php
    function esPrimo($numero)
    {
        $primo = true;
        $contador = 0;
        for ($i = 1; $i <= $numero; $i++) {
            if ($numero % $i == 0) {
                $contador++;
            }
        }

        if ($contador != 2) {
            $primo = false;
        }

        return $primo;
    }

    for ($i = 1; $i <= 1000; $i++) {

        if ($i == 1000) {
            if (esPrimo($i)) {
                echo $i;
            }
        } else {
            if (esPrimo($i)) {
                echo $i . ", ";
            }
        }
    }
    ?>
</body>

</html>