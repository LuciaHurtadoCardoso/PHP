<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise14/tanda3</title>
</head>
<body>
    <?php
        $base = $_POST['base'];
        $exp = $_POST['exp'];

        echo $base,"<sup>",$exp,"</sup> = ", pow($base,$exp);
    ?>
    <p><a href="exercise14_t3.html"> Volver</a></p>
</body>
</html>