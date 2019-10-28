<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercise10/tanda1</title>
</head>
<body>
<?php
    $mb = $_POST['mb'];
    echo "<p>", $mb, "Mb son ", round($mb*1024,2), "Kb</p>";
?>
<p><a href="exercise10_t1.html">Volver</a></p>
</body>
</html>