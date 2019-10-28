<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caja fuerte</title>
</head>
<body>
    <h2>Abre la caja fuerte</h2>
    <?php
        if (!isset($_POST['oportunidades'])) {
            $numeroUsuario = 55555;
            $oportunidades = 4;
          } else {
            $oportunidades = $_POST['oportunidades'];
            $numeroUsuario = $_POST['num'];
          }

          $clave = 1234;

          if ($numeroUsuario == $clave) {
            echo "La caja fuerte se ha abierto.";
            echo '<p><a href="exercise7_t3.php">Volver</a></p>';
          } else if ($oportunidades == 0) {
            echo "Lo siento, has agotado todas tus oportunidades. La caja fuerte permanecerá cerrada.";
            echo '<p><a href="exercise7_t3.php">Volver</a></p>';
          } else {
            echo "Te quedan ", $oportunidades, " oportunidades para abrir la caja fuerte.<br>";
            $oportunidades--;
            echo "Introduce un número de cuatro cifras.";
            echo '<form action="exercise7_t3.php" method="post">';
            echo '<input type="number" min=0 max=9999 name="num">';
            echo '<input type="hidden" name="oportunidades" value="', $oportunidades, '">';
            echo '<input type="submit" value="Continuar">';
            echo '</form>';
          }
          
    ?>
</body>
</html>