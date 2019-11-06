<?php
$array = [];
$test = 1;

for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $array[$i][$j] = $test;
        $test++;
    }
}
echo "<br>";
print_r($array);
echo "<br>";
function Diagonal($arrayBidimensional, $fila, $columna, $direccion)
{
    $arrayFinal = [];
    $k = $columna;
    $i = $fila;
    if ($fila < sizeof($arrayBidimensional) && $columna < sizeof($arrayBidimensional[$fila])) {
        if ($direccion == "nose") {
            while ($k < sizeof($arrayBidimensional) && $i < sizeof($arrayBidimensional)) {
                $arrayFinal[] = $arrayBidimensional[$i][$k];
                $k++;
                $i++;
            }
        } else if ($direccion == "neso") {
            while ($k >= 0 && $i < sizeof($arrayBidimensional)) {
                $arrayFinal[] = $arrayBidimensional[$i][$k];
                $k--;
                $i++;
            }
        } else {
            echo "La dirección es incorrecta";
        }
    } else {
        echo "La fila/columna introducida se sale de los límites";
    }


    return $arrayFinal;
}

print_r(Diagonal($array, 1, 2, "neso"));
