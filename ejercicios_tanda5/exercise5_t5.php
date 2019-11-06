<?php
    function digitos($numero) {
        $numeroDigitos = strlen($numero);
    
        return $numeroDigitos;
    }
    
    $numero = 123456789;
    $resultado = digitos($numero);
    echo "El ".$numero." tiene ".$resultado." digitos";
?>