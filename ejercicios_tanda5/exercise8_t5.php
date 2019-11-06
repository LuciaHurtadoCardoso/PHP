<?php
    function posicionDeDigito($numero, $digito) {
        $numeroCadena = (string)$numero;
        $digitoCadena = (string)$digito;
        $posicion = strpos($numeroCadena,$digitoCadena);
        if($posicion == false)
        {
            $posicion = -1;
        }

        return $posicion;
    }

    $numero = 123456789;
    $digito =3;
    $resultado = posicionDeDigito($numero,$digito);
    echo "El número ".$digito." se encuentra por primera vez en el número ".$numero." en la posición ".$resultado;
?>