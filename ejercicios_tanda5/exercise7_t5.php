<?php
    function digitoN($numero,$posicion)
    {
        $numeroCadena = (string)$numero;
        $array = str_split($numeroCadena);
        $digito = $array[$posicion];

        return $digito;
    }

    $numero = 123456789;
    $posicion = 4;
    $resultado = digitoN($numero,$posicion);
    echo "En la posición ".$posicion." del número ".$numero." se encuentra el ".$resultado;
?>