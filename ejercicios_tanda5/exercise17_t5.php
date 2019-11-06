<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Binario a decimal</title>
</head>

<body>
    <?php
    function BinarioDecimal($numeroBinario)
    {
        $decimal = bindec($numeroBinario);

        return $decimal;
    }

    $numeroBinario = 100000;
    $decimal = BinarioDecimal($numeroBinario);

    echo "Binario: ".$numeroBinario." = Decimal: ".$decimal;
    ?>
</body>

</html>