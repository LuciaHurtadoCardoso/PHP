<?php
    function pegaPorDelante($numero, $digito) {
        $numeroCadena = (string)$numero;
        $digitoCadena = (string)$digito;
        $numeroFinalCadena = $digitoCadena.$numeroCadena;
        $numeroFinal = (int)$numeroFinalCadena;
       
        return $numeroFinalCadena;
    }
    
    $numero = 12345;
    $digito = 2;
    $resultado = pegaPorDelante($numero,$digito);
    echo "El ".$numero." con el dígito ".$digito." por delante quedaría ".$resultado;
?>