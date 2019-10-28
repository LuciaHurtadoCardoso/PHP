<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise26/tanda3</title>
</head>
<body>
    <?php
        $num = $_POST['num'];
        $dig = $_POST['dig'];
        $numString = (string)$num;
        $digString = (string)$dig;
        $numVeces = mb_substr_count($numString, $digString);
        $posicion = 0;
        $arrayPosicion = [];
        $i = 1;
        while($i <= $numVeces){
            if($posicion != false){
                $posicion = strpos($num, $dig, $posicion+1);
            }else{
                $posicion = strpos($num,$dig);
            }
            
            if($posicion != false){
                array_push($arrayPosicion, $posicion);
            }
            $i++;
        }
        echo "En el número introducido ",$num," el dígito ",$dig," aparece en las posiciones: ";
        for($j = 0; $j < sizeof($arrayPosicion); $j++){
            if($j != sizeof($arrayPosicion)-1){
                echo $arrayPosicion[$j],", ";
            }else{
                echo $arrayPosicion[$j];
            }
        }

    ?>
    <p><a href="exercise26_t3.html"> Volver</a></p>
</body>
</html>