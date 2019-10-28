<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercise22/tanda3</title>
</head>
<body>
    <h1>Números primos entre 2-100</h1>
    <?php
    $arrayPrimos =[];
        for($i = 2; $i <= 100; $i++){
            $primo = true;
            for($j = 2; $j < $i; $j++){
                if($i%$j == 0){
                    $primo = false;
                    $j = $i;
                }
            }
            if($primo){
                array_push($arrayPrimos, $i);
            }
        }

        for($i = 0; $i < sizeof($arrayPrimos); $i++){
            if($i == sizeof($arrayPrimos)-1){
                echo $arrayPrimos[$i];
            }else{
                echo $arrayPrimos[$i],", ";
            }
        }
    ?>
</body>
</html>