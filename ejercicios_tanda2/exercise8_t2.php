<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercise8/tanda2</title>
</head>
<body>
    <?php
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $media = ($a+$b+$c)/3;
        if($media >= 0 && $media <5)
        {
            echo "La media de las siguientes notas: ", $a, ", ", $b, ", ", $c, ", es ", round($media,2), " <br>Es INSUFICIENTE";
        }
        else if($media >=5 && $media < 6)
        {
            echo "La media de las siguientes notas: ", $a, ", ", $b, ", ", $c, ", es ", round($media,2), " <br>Es SUFICIENTE";
        }
        else if($media >= 6 && $media < 7)
        {
            echo "La media de las siguientes notas: ", $a, ", ", $b, ", ", $c, ", es ", round($media,2), "<br>Es BIEN";
        }
        else if($media >= 7 && $media < 9)
        {
            echo "La media de las siguientes notas: ", $a, ", ", $b, ", ", $c, ", es ", round($media,2), "<br>Es NOTABLE";
        }
        else if($media >= 9 && $media <= 10)
        {
            echo "La media de las siguientes notas: ", $a, ", ", $b, ", ", $c, ", es ", round($media,2), " <br>Es SOBRESALIENTE";
        }
        else{
            echo "Nota no válida";
        }
        
    ?>
    <p><a href="exercise8_t2.html">Volver</a></p>
</body>
</html>