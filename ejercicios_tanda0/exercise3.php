<?php
$palabras_ingles = ["Hello", "Bye", "Happy", "Sun", "Good", "Love", "Hate", "One", "Two", "Three"];
$palabras_español = ["Hola", "Adiós", "Feliz", "Sol", "Bueno", "Amor", "Odio", "Uno", "Dos", "Tres"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercise 3</title>
</head>
<body>
    <table>
    <tr>
        <td> <th>Inglés</th> </td>
        <td> <th>Español</th> </td>
    </tr>
    
    <?php
        for ($i = 0; $i < sizeof($palabras_ingles); $i++)
        {
            echo "<tr> <td> $palabras_ingles[$i] </td> <td> $palabras_español[$i] </td> </tr>";
        }
    ?>
    </table>
</body>
</html>