<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercise6/tanda2</title>
</head>
<body>
    <?php
        $h = $_POST['h'];
        $alturaSinRaiz = (2*$h)/9.81;
        $alturaTotal = sqrt($alturaSinRaiz);
        echo "El tiempo que tarda en caer el objeto desde ", $h, " metros de altura es de ", round($alturaTotal,2), " segundos";
    ?>
    <p><a href="exercise6_t2.html">Volver</a></p>
</body>
</html>