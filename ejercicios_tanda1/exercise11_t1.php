<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercise11/tanda1</title>
</head>
<body>
<?php
    $kb = $_POST['kb'];
    echo "<p>", $kb, "Kb son ", round($kb/1024, 2), "Mb</p>";
?>
<p><a href="exercise11_t1.html">Volver</a></p>
</body>
</html>