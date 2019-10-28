<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise25/tanda3</title>
</head>
<body>
    <?php
        $num = $_POST['num'];
        $numString = (string)$num;
        echo "El número ", $num, " invertido se vería así: ",(int)strrev($numString);
    ?>
    <p><a href="exercise25_t3.html"> Volver</a></p>
</body>
</html>