<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise6/tanda3</title>
</head>
<body>
    <h2>Contando números de 20 en 20</h2>
    <?php
    $i = 320;
    do{
        echo "· ", $i, "<br>";
        $i -= 20;
    } while($i >= 160)
    ?>
</body>
</html>