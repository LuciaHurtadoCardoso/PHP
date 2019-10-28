<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise17/tanda3</title>
</head>
<body>
    <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        if($num1==$num2){
            echo "Los números son iguales, pruebe de nuevo";
        }else{
            if($num1>$num2){
                $aux = $num1;
                $num1 = $num2;
                $num2 = $aux;
            }
            $numeros = [];
            for($i = $num1; $i < $num2; $i+=7){
                array_push($numeros, $i);
            }
            echo "Los números comprendidos entre ",$num1," y ",$num2," son: ";
            for($i = 0; $i < sizeof($numeros); $i++){
                if($i == sizeof($numeros)-1){
                    echo $numeros[$i];
                }else{
                    echo $numeros[$i],", ";
                }
            }
        }
    ?>
    <p><a href="exercise18_t3.html"> Volver</a></p>
</body>
</html>