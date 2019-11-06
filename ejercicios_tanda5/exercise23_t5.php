<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Media del array</title>
</head>

<body>
    <h1>Media del array</h1>
    <?php
    function mediaArrayInt($array)
    {
        $suma = 0;
        foreach ($array as $numero)
        {
            $suma = $suma + $numero;
        }
        
        $media = $suma / sizeof($array);
        return $media;
    }
    $array = [4,3,2,5,7];
    $media = mediaArrayInt($array);
    echo "La media del array ".$array." es: ".$media;
    ?>
</body>

</html>