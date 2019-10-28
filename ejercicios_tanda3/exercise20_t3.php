<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise19/tanda3</title>
</head>
<body>
    <?php
        $altura = $_POST['altura'];
        $figura = $_POST['figura'];
        echo "<pre>";
        for($i = 1; $i<= $altura; $i++){

            $espacios = $altura - $i;
            for($b = 1; $b<=$espacios; $b++){
                    echo '&nbsp';
            }
            if($i == $altura)
            {
                for($b = 1; $b <= ($altura*2)-1; $b++)
                {
                    echo $figura;
                }
                
            }
            else{
                for($c=1; $c<=($i*2)-1; $c++){
                    if($c == 1 || $c == ($i*2)-1)
                    {
                        echo $figura;
                    }   
                    else{
                        echo '&nbsp';
                    }
        }   
    }
        echo "</br>";
    }
    echo "</pre>";
    ?>
    <p><a href="exercise20_t3.html"> Volver</a></p>
</body>
</html>