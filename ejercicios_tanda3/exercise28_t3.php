<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise28/tanda3</title>
</head>
<body>
    <?php
        $num = $_POST['num'];
        $factorial = $num;
        echo $num,"! = ",$num," x ";
        for($i = 1; $i < $num; $i++){
            if($i != $num-1)
            {
                echo $num-$i," x ";
                $factorial = $factorial * ($num-$i);
            }
            else{ 
                $factorial = $factorial * ($num-$i);
                echo $num-$i, " = ", $factorial;
            } 
        }
    ?>
    <p><a href="exercise28_t3.html"> Volver</a></p>
</body>
</html>