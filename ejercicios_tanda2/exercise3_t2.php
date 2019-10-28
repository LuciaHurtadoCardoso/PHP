<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercise3/tanda2</title>
</head>
<body>
    <?php
        $dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes"];
        $num = $_POST['num'];

        if($num >= 1 && $num <=7){
            echo "<p> El ", $num, " corresponde al ", $dias[$num-1], "</p>";
        }
        else{
            echo "El número introducido no es válido";
        }
    ?>
    <p><a href="exercise3_t2.html">Volver</a></p>
</body>
</html>