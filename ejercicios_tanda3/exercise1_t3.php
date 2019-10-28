<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise1/tanda3</title>
</head>
<body>
    <h2>Múltiplos de 5:</h2>
    <?php
    for($i = 0; $i <= 100; $i++){
        if($i % 5 == 0){
            echo "· ",$i,"<br>"; 
        }
    }
    ?>
</body>
</html>