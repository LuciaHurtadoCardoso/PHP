<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise16/tanda3</title>
</head>
<body>
    <?php
        $num = $_POST['num'];
        $primo = true;
        for($i = 2; $i < $num; $i++){
            if($num%$i == 0){
                $primo = false;
                $i = $num;
            }
        }

        if($primo){
            echo $num," es primo";
        }else{
            echo $num," no es primo";
        }
    ?>
    <p><a href="exercise16_t3.html"> Volver</a></p>
</body>
</html>