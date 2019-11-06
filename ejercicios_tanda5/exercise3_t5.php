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
function siguientePrimo($numero)
{

    $siguientes = $numero;
    do {
        $siguientes++;
    } while (!esPrimo($siguientes));

    return $siguientes;
}

$numero  = 347;
$resultado = siguientePrimo($numero);
echo "El menor primo siguiente a ".$numero." es ".$resultado;