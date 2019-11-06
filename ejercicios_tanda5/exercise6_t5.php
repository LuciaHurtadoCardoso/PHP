<?php
    function voltea($numero) {
        $numeroCadena = (string) $numero; 
        $numeroCadenaReves = strrev($numeroCadena);
    
        return $numeroCadenaReves;
    }
    
    $numero = 123456789;
    $resultado = voltea($numero);
    echo "Número inicial: ". $numero. "<br> Número volteador: ".$resultado;   
?>