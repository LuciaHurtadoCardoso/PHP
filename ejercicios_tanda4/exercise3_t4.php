<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise3/tanda4</title>
</head>
<body>
    <h1>Inserte 15 números por teclado</h1> 
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

        $nuevoArray = [];
        if ($contadorNumeros == 15) {
        $numeroTexto = $numeroTexto . " " . $n;
        $numeroTexto = substr($numeroTexto, 2);
        $numero = explode(" ", $numeroTexto);

        for($i = 0; $i < sizeof($numero); $i++){
            if($i == sizeof($numero)-1){
                $nuevoArray[0] = $numero[$i];
            }else{
                $nuevoArray[$i+1] = $numero[$i];
            }
        }

        for($i = 0; $i < sizeof($nuevoArray); $i++){
            if($i == sizeof($nuevoArray)-1){
                echo $nuevoArray[$i];
            }else{
                echo $nuevoArray[$i]." - ";
            }
        }
        ?>
        <br>
        <a href="exercise3_t4.php">Volver</a>
        <?php
      }
      if ($contadorNumeros < 15)  {
        ?>
        <form action="exercise3_t4.php" method="get">
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