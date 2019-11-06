<?php

$array = [];

$test = 1;
for ($i = 0; $i < 12; $i++){
    for ($k = 0; $k < 12; $k++){

        $array[$i][$k] = $test;
        $test++;
    }
}

$empezar = sizeof($array) / 2;
$arrayNuevo = [];
$aux = sizeof($array) - 1;
$l = 0;

while ($l < $empezar){
    for ($i = $l; $i < sizeof($array) - $l; $i++){
        for($k = $l; $k < sizeof($array) - $l; $k++){
                if($i == $l && $k < sizeof($array) - 1 - $l){
                    $arrayNuevo[$i][$k+1] = $array[$i][$k];
                }elseif ($i < sizeof($array) - 1 - $l && $k == sizeof($array) - 1 - $l){
                    $arrayNuevo[$i+1][$k] = $array[$i][$k];
                }elseif ($i == sizeof($array)-1 - $l && $k > $l){
                    $arrayNuevo[$i][$k-1] = $array[$i][$k];
                }elseif ($i > $l && $k == $l){
                    $arrayNuevo[$i - 1][$k] = $array[$i][$k];
                }else{
                    $arrayNuevo[$i][$k] = $array[$i][$k];
                }
        }
    }
    $l++;
}


for ($j = 0; $j < sizeof($array); $j++){
    for ($z = 0; $z < sizeof($array); $z++){
        echo $array[$j][$z] . " - ";
    }
    echo "<br/>";
}
echo "<br/>";
echo "---------------------------------------------------------";
echo "<br/>";
for ($j = 0; $j < sizeof($arrayNuevo); $j++){
    for ($z = 0; $z < sizeof($arrayNuevo); $z++){
        if ($z == sizeof($arrayNuevo) - 1){
            echo $arrayNuevo[$j][$z];
        }else {
            echo $arrayNuevo[$j][$z] . " - ";
        }
        
    }
    echo "<br/>";
}

?>