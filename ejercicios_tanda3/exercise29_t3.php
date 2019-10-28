<!-- Escribe un programa que muestre por pantalla todos los números enteros positivos menores a uno leído por teclado 
que no sean divisibles entre otro también leído de igual forma. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise29/tanda3</title>
</head>
<body>
    <?php
        $num = $_POST['num'];
        $div = $_POST['div'];
        $arrayNumeros = [];
        for($i = 0; $i < $num; $i++){
            if($i%$div!=0){
                array_push($arrayNumeros, $i);
            }
        }

        echo "Los números enteros positivos menores a ", $num, " que no son divisibles entre ",$div," son los siguientes: <br>";
        for($i = 0; $i < sizeof($arrayNumeros); $i++){
            if($i != sizeof($arrayNumeros)-1){
                echo $arrayNumeros[$i],", ";
            }else{
                echo $arrayNumeros[$i];
            }
        }
    ?>
    <p><a href="exercise29_t3.html"> Volver</a></p>
</body>
</html>