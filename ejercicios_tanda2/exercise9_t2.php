<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercise9/tanda2</title>
</head>
<body>
    <?php
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        if(($a == 0) && ($b == 0) && ($c == 0)){
            echo "La ecuación tiene infinitas soluciones";
        }
        if(($a == 0) && ($b == 0) && ($c != 0)){
            echo "La ecuación no tiene solución";
        }
        if(($a != 0) && ($b != 0) && ($c == 0)){
            echo "x<sub>1</sub> = 0";
            echo "<br>x<sub>2</sub> = ", (-$b / $a);
        }
        if(($a == 0) && ($b != 0) && ($c != 0)){
            echo "x<sub>1</sub> = x<sub>2</sub> = ", (-$c /$b);
        }
        if(($a != 0) && ($b != 0) && ($c != 0)){
            $discriminante = pow($b,2) - (4*$a*$c);

            if($discriminante<0){
                echo "La ecuación no tiene soluciones reales";
            }else{
                echo "x<sub>1</sub> =", round((-$b +  sqrt($discriminante))/(2*$a),2), "<br>";
                echo "x<sub>2</sub> =", round((-$b -  sqrt($discriminante))/(2*$a),2);
            }
        }
    ?>
    <br><br>
    <p><a href="exercise9_t2.html">Volver</a></p>
</body>
</html>