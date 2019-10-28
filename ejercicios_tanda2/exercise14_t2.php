<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise12/tanda2</title>
</head>
<body>
    <?php
    $num = (int)$_POST['num'];
    echo "El número introducido es ", $num,"<br>";
    if($num%2 == 0)
    {
        echo "<p> El número introducido es par </p>";
    }else{
        echo "<p> El número introducido es impar </p>";
    }
    if($num%5 == 0){
        echo "<p> El número es divisible entre 5 </p>";
    }else{
        echo "<p> El número no es divisible entre 5 </p>";
    }
    ?>
    <br><br>
    <p><a href="exercise14_t2.html">Volver</a></p>
</body>
</html>