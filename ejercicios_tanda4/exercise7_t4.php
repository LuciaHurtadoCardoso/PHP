<?php
    $arrayInicial = [];
    $arrayPar = [];
    $arrayImpar =[];
    $arrayFinal = [];
    echo "Array inicial <br><br>";
    for($i = 0; $i < 20; $i++){
        $arrayInicial[$i] = rand(0,100);
        echo $arrayInicial[$i]." ";
    }
    for($i = 0; $i < sizeof($arrayInicial); $i++){
        if($arrayInicial[$i]%2==0){
            array_push($arrayPar,$arrayInicial[$i]);
        }else{
            array_push($arrayImpar,$arrayInicial[$i]);
        }
    }
    $arrayFinal = array_merge($arrayPar, $arrayImpar);
    echo "<br> <br> Array ordenado <br><br>";
    foreach($arrayFinal as $value){
        echo $value." ";
    }
?>