<?php
    function juntaNumeros($numeroUno, $numeroDos) {
        $numeroFinal = $numeroUno.$numeroDos;
        $numeroFinal = (int)$numeroFinal;
        return $numeroFinal;
    }

    $numeroUno = 1;
    $numeroDos = 2;
    $resultado = juntaNumeros($numeroUno, $numeroDos);
    echo "El número resultante de los números ".$numeroUno." y ".$numeroDos." es ".$resultado;
?>