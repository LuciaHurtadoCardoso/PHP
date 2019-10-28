<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise10/tanda2</title>
</head>
<body>
    <?php
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $horoscopo = "";

    switch($mes){
        case 1:{
            if($dia < 21)
            {
                $horoscopo = "Capricornio";
            }else{
                $horoscopo = "Acuario";
            }
        }
        break;
        case 2:{
            if($dia < 20)
            {
                $horoscopo = "Acuario";
            }else{
                $horoscopo = "Piscis";
            }
        }
        break;
        case 3:{
            if ($dia < 21){
                $horoscopo = "Piscis";
            }else{
                $horoscopo = "Aries";
            }
        }
        break;
        case 4:{
            if($dia < 21)
            {
                $horoscopo = "Aries";
            }else{
                $horoscopo = "Tauro";
            }
        }
        break;
        case 5:{
            if($dia < 22){
                $horoscopo = "Tauro";
            }else{
                $horoscopo = "Géminis";
            }
        }
        break;
        case 6:{
            if($dia < 22){
                $horoscopo = "Géminis";
            }else{
                $horoscopo = "Cáncer";
            }
        }
        break;
        case 7:{
            if($dia < 24)
            {
                $horoscopo = "Cáncer";
            }else{
                $horoscopo = "Leo";
            }
        }
        break;
        case 8:{
            if($dia < 24){
                $horoscopo = "Leo";
            }else{
                $horoscopo = "Virgo";
            }
        }
        break;
        case 9:{
            if($dia < 24){
                $horoscopo = "Virgo";
            }else{
                $horoscopo = "Libra";
            }
        }
        break;
        case 10:{
            if($dia <24){
                $horoscopo = "Libra";
            }else{
                $horoscopo = "Escorpio";
            }
        }
        break;
        case 11:{
            if($dia < 23)
            {
                $horoscopo = "Escorpio";
            }else{
                $horoscopo = "Sagitario";
            }
        }
        break;
        case 12:{
            if($dia < 22){
                $horoscopo = "Sagitario";
            }else{
                $horoscopo = "Capricornio";
            }
        }
        break;
    }

    echo "Tu horóscopo es ", $horoscopo;
    ?>
    <br><br>
    <p><a href="exercise10_t2.html">Volver</a></p>
</body>
</html>