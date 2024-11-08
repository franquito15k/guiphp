<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Ingresos</title>
</head>
<section>
    <h2>Formulario de Ingresos Mensuales</h2>
    <form action="act12.1.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="ingresos">Ingresos Mensuales:</label>
        <select id="ingresos" name="ingresos" required>
            <option value="">Seleccione una opción</option>
            <option value="1000">1000</option>
            <option value="2000">2000</option>
            <option value="3000">3000</option>
            <option value="4000">4000</option>
            <option value="5000">5000</option>

        </select><br><br>

        <input type="submit" value="Enviar">
    </form>
</section>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $ingresos = $_POST['ingresos'];

    echo "<h2>Resultado</h2>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Ingresos Mensuales: $$ingresos</p>";

    if ($ingresos > 3000) {
        echo "<p>$nombre debe pagar impuestos a las ganancias.</p>";
    } else {
        echo "<p>$nombre no debe pagar impuestos a las ganancias.</p>";
    }
}
?>
