<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise9/tanda3</title>
</head>
<body>
    <?php
        $num = $_POST['num'];
        if($num < 10){
            $num = -$num;
        }
        echo "El número introducido tiene ", strlen($num), " dígitos";
    ?>
    <p><a href="exercise9_t3.html"> Volver</a></p>
</body>
</html>