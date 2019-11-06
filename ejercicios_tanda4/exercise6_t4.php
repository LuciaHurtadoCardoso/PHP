<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise6/tanda4</title>
</head>
<body>
    <h1>Inserte 8 números por teclado</h1> 
    <?php
        if (!isset($_GET['n'])) {
          $contadorNumeros = 0;
          $numeroTexto = "";
          $n = "";
        } else {
          $n = $_GET['n'];
          $contadorNumeros = $_GET['contadorNumeros'];
          $numeroTexto = $_GET['numeroTexto'];
        }

        if ($contadorNumeros == 8) {
        $numeroTexto = $numeroTexto . " " . $n;
        $numeroTexto = substr($numeroTexto, 2);
        $numero = explode(" ", $numeroTexto);

        for($i = 0; $i < sizeof($numero); $i++){
            if($numero[$i]%2==0){
                echo "<span style=\"color: green;\">$numero[$i]</span> ";
            }else{
                echo "<span style=\"color: red;\">$numero[$i]</span> ";
            }
        }
        ?>
        <br>
        <a href="exercise6_t4.php">Volver</a>
        <?php
      }
      if ($contadorNumeros < 8)  {
        ?>
        <form action="exercise6_t4.php" method="get">
          Introduzca un número:
          <input type="number" name ="n" autofocus>
          <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
          <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $n ?>">
          <input type="submit" value="Enviar">
        </form>
        <?php
      }
      ?>
</body>
</html>