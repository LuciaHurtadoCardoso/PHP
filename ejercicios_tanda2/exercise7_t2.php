<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercise7/tanda2</title>
</head>
<body>
    <?php
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $media = ($a+$b+$c)/3;
        echo "La media de las siguientes notas: ", $a, ", ", $b, ", ", $c, ", es ", round($media,2);
    ?>
    <p><a href="exercise7_t2.html">Volver</a></p>
</body>
</html>