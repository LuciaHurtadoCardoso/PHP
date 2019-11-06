<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Decimal a binario</title>
</head>

<body>
    <h1>Decimal a binario</h1>
    <?php
    function DecimalBinario($numeroDecimal)
    {
        $binario = decbin($numeroDecimal);

        return $binario;
    }
    $numeroDecimal = 32;
    $binario = DecimalBinario($numeroDecimal);

    echo "Decimal: ".$numeroDecimal." a binario: ".$binario;
    ?>
</body>

</html>