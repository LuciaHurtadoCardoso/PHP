<?php
  if (!isset($_GET['temperatura'])) {
    // Pide los datos de las temperaturas
    $mes = array(
    "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Semptiembre", "Octubre", "Noviembre", "Diciembre");
    ?>
    Por favor, introduzca la temperatura media de cada mes: <br><br>
    <form action="exercise5_t4.php" method="get">
      <?php
      echo "<table>";
      for ($i = 0; $i < 12; $i++) {
        echo "<tr><td>$mes[$i]</td><td> <input type=\"number\" name =\"temperatura[$mes[$i]]\"><br></td></tr>";
      }
      echo "</table><br>";
      ?>
      <input type="submit" value="Enviar">

    </form>

    <?php
  } else {
    // Pinta el diagrama de barras
    $temperatura = $_GET['temperatura'];
    echo "<table>";
    foreach($temperatura as $mes => $temperaturaMes) {
      echo "<tr><td>$mes</td><td>";
      // Pinta la barra
      for ($i = 0; $i < $temperaturaMes; $i++) {
        echo "-";
      }
      echo " $temperaturaMes"."ºC<br></td></tr>";
    }
    echo "</table>";
    ?>
    <br>
    <a href="exercise5_t4.php"> Volver</a>
    <?php
  }