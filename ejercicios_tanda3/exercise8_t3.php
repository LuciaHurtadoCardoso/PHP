<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise8/tanda3</title>
</head>
<body>
    <table>
    <?php
    $num = $_POST['num'];
    echo "Tabla del ", $num, "<br>";
    for($i=1; $i<=10; $i++){
        echo "<tr> <td> $num x $i =",$num*$i,"</tr></td>";
    }
    ?>
    </table>
    <p><a href="exercise8_t3.html"> Volver</a></p>
</body>
</html>