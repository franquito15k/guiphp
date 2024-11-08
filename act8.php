<html>

<body>

    <?php
    $num = 2;
    $resultado = 0;
    echo "Tabla del 2 por FOR";
    for ($tabla2 = 1; $tabla2 < 11; $tabla2++) {
        $resultado = $num * $tabla2;
        echo "<li>$resultado</li>";
    }
    $resultado = 0;
    $tabla2 = 1;
    echo "<br>Tabla del 2 por while";
    while ($tabla2 < 11) {
        $resultado = $num * $tabla2;
        echo "<li>$resultado</li>";
        $tabla2++;
    }
    $tabla2=1;
    echo "<br>Tabla del 2 por do_while";
    do {
        $resultado = $num * $tabla2;
        echo "<li>$resultado</li>";
        $tabla2++;    
    } while ($tabla2<11);
    ?>

</body>

</html>