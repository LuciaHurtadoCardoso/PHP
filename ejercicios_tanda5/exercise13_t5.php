<?php
    function trozoDeNumero($numero, $posicionInicial, $posicionFinal) {
        $numeroCadena = (string)$numero;
        $arrayNumeroCadena = str_split($numeroCadena);
        $trozoArray = array_splice($arrayNumeroCadena,$posicionInicial,$posicionFinal);
        $trozoCadena = implode("",$trozoArray);
        $trozoNumero = (int)$trozoCadena;
    
        return $trozoNumero;
    }

    $numero = 123456789;
    $posicionInicial = 4;
    $posicionFinal = 3;
    $resultado = trozoDeNumero($numero,$posicionInicial,$posicionFinal);
    echo "El trozo correspondiente entre la posición ".$posicionInicial." y la posición ".$posicionFinal." del número ".$numero." sería ".$resultado;
?>