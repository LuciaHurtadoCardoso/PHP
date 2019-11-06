<?php
function potencia($base,$exponente) {
    $potencia = pow($base,$exponente);

    return $potencia;
}
$base = 2;
$exponente = 3;
$resultado = potencia($base,$exponente);
echo $base."<sup>".$exponente."</sup> = ".$resultado;
?>