<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise12/tanda3</title>
</head>
<body>
    <?php
        $num = $_POST['num'];
        $serie = [0,1];
        $suma=0;
        for($i = 0; $i < $num-2; $i++){
            $suma = $serie[$i]+$serie[$i+1];
            array_push($serie, $suma);
        }
        for($i = 0; $i < sizeof($serie); $i++){
            if($i == sizeof($serie)-1){
                echo $serie[$i];
            }else{
                echo $serie[$i],", ";
            }
        }
    ?>
    <p><a href="exercise12_t3.html"> Volver</a></p>
</body>
</html>