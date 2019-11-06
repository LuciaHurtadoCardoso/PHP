<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise8/tanda4</title>
</head>
<body>
    <h1>Inserte 10 números por teclado</h1> 
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
    
        if ($contadorNumeros == 10) {
        $numeroTexto = $numeroTexto . " " . $n;
        $numeroTexto = substr($numeroTexto, 2);
        $numero = explode(" ", $numeroTexto);
        $arrayPrimos = [];
        $arrayNoPrimos = [];
        $contador = 0;
        for($i = 0; $i < sizeof($numero); $i++){
            for($j = 2; $j < $numero[$i]; $j++){
                if($numero[$i]%$j == 0){
                    $contador++;
                }
            }
            if($contador ==0){
                array_push($arrayPrimos, $numero[$i]);
            }else{
                array_push($arrayNoPrimos, $numero[$i]);
            }
            $contador = 0;
        }
        $arrayFinal = array_merge($arrayPrimos, $arrayNoPrimos);
        echo "<table>";
        echo "<tr>";
        echo "<th>Índice</th>";
        echo "<th>Número</th>";
        echo "</tr>";
        for($i = 0; $i < sizeof($arrayFinal); $i++){
            echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td>".$arrayFinal[$i]."</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
        <br>
        <a href="exercise8_t4.php">Volver</a>
        <?php
      }
      if ($contadorNumeros < 10)  {
        ?>
        <form action="exercise8_t4.php" method="get">
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