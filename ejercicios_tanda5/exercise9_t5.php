<?php
    function quitaPorDetras($numero, $digitos) {
        $numeroCadena = (string)$numero;
        $array = str_split($numeroCadena);
        $longitud = sizeof($array) - $digitos;
        $arrayFinal = array_splice($array,0,$longitud);
    
        $numeroFinal = implode("",$arrayFinal);
    
        return $numeroFinal;
    }
    
    $numero = 12345;
    $digitos = 4;
    $resultado = quitaPorDetras($numero,$digitos);
    echo "El número ".$numero." con ".$digitos." menos queda así ".$resultado;
?>