<?php
    function esPrimo($numero)
    {
        $primo = true;
        $contador = 0;
        for($i = 1; $i <= $numero; $i++)
        {
            if($numero % $i == 0)
            {
                $contador++;
            }
        }
    
        if($contador != 2)
        {
            $primo = false;
        }
    
        return $primo;
    }
    $numero = 349;
    if(esPrimo($numero))
    {
        echo $numero . " es primo";
    }
    else{
        echo $numero . " no es primo";
    }
    
    echo "<br>";
?>