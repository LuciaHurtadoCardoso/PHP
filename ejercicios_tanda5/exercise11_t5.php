<?php
    function pegaPorDetras($numero, $digito) {
        $numeroCadena = (string)$numero;
        $digitoCadena = (string)$digito;
        $numeroFinalCadena = $numeroCadena.$digitoCadena;
        $numeroFinal = (int)$numeroFinalCadena;
       
        return $numeroFinalCadena;
    }
    
    $numero = 12345;
    $digito = 2;
    $resultado = pegaPorDetras($numero,$digito);
    echo "El ".$numero." con el dígito ".$digito." por detrás quedaría ".$resultado;
?>