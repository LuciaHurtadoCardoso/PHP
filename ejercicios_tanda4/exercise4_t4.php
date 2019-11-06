<?php
    if (!isset($_GET['numeroTexto'])) {
        for($i = 0; $i < 100; $i++){
            $array[$i] = rand(0,20);
            echo $array[$i]." ";
        }
    
    $numeroTexto = implode(" ", $array);
?>
    <br><br>
    <form action="exercise4_t4.php" method="get">
    Valor para sustituir: <input type="number" name ="antiguo" autofocus="" required=""><br><br>
    Valor nuevo: <input type="number" name ="nuevo" required="">
    <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto; ?>">
    <input type="submit" value="Enviar">
    </form>
<?php
    } else {
        $numeroTexto = $_GET['numeroTexto'];
        $viejo = $_GET['antiguo'];
        $nuevo = $_GET['nuevo'];

        $numero = explode(" ", $numeroTexto);

        foreach ($numero as $n) {
            if ($n == $viejo) {
                echo "<span style=\"color: red; font-weight: bold;\">$nuevo</span> ";
            } else {
                echo  "$n ";
            }
        }
?>
    <br>
    <a href="exercise4_t4.php">Volver</a>
<?php
    }