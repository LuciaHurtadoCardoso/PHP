<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise27/tanda3</title>
</head>
<body>
    <?php
        $num = $_POST['num'];
        $cuenta = 0;
        $suma = 0;
        $numeros = [];
        for($i = 1; $i <= $num; $i++){
            if($i%3 == 0){
                array_push($numeros, $i);
                $cuenta++;
                $suma += $i;
            }
        }

        echo "Entre 1 y ",$num," existen ",$cuenta," múltiplos de 3<br>";
        echo "La suma de los múltiplos de 3 existentes entre 1 y ",$num," daría ",$suma,"<br>";
        echo "Los múltiplos de 3 existentes entre 1 y ",$num," son: ";
        for($i = 0; $i < sizeof($numeros); $i++){
            if($i != sizeof($numeros)-1){
                echo $numeros[$i],", ";
            }else{
                echo $numeros[$i];
            }
        }
    ?>
    <p><a href="exercise27_t3.html"> Volver</a></p>
</body>
</html>