<?php
    function quitaPorDelante($numero, $digitos) {
        $numeroCadena = (string)$numero;
        $array = str_split($numeroCadena);
        $final = sizeof($array);
        $arrayFinal = array_splice($array,$digitos,$final);
    
        $numeroFinal = implode("",$arrayFinal);
    
        return $numeroFinal;
    }
    
    $numero = 1234;
    $digitos = 2;
    $resultado = quitaPorDelante($numero,$digitos);
    echo "El ".$numero." con ".$digitos." menos por delante queda ".$resultado;
?>