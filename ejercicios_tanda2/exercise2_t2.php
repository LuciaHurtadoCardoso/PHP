<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercise2/tanda2</title>
</head>
<body>
    <?php
        $hora = $_POST['hora'];

        if($hora >= 6 && $hora < 12)
        {
            echo "Buenos días";
        }
        else if ($hora >= 12 && $hora <= 20){
            echo "Buenas tardes";
        }
        else if($hora >= 21 && $hora <24 || $hora >= 0 && $hora <=5)
        {
            echo "Buenas noches";
        }
        else{
            echo "La hora introducida no es válida";
        }
    ?>
    <p><a href="exercise2_t2.html">Volver</a></p>
</body>
</html>