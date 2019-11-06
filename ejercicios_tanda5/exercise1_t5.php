<?php
function esCapicua($numero) {
    $esCapi = true;
    $array = str_split($numero);
    $arrayReverse = array_reverse($array);

    for($i = 0; $i < sizeof($array); $i++)
    {
        if($array[$i] != $arrayReverse[$i])
        {
            $esCapi = false;
        }
    }
    return $esCapi;
}
$numero = 343;
if(esCapicua($numero))
{
    echo $numero . " es capicúa";
}
else{
    echo $numero . " no es capicúa";
}
echo "<br>";
?>