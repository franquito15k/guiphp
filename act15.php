<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $pedido = "Nombre: $nombre\nDirección: $direccion\n";

    if (isset($_POST["jamon_queso"])) {
        $cantidadJamonQueso = $_POST["cantidad_jamon_queso"];
        $pedido .= "Jamón y Queso: $cantidadJamonQueso\n";
    }
    if (isset($_POST["napolitana"])) {
        $cantidadNapolitana = $_POST["cantidad_napolitana"];
        $pedido .= "Napolitana: $cantidadNapolitana\n";
    }
    if (isset($_POST["muzzarella"])) {
        $cantidadMuzzarella = $_POST["cantidad_muzzarella"];
        $pedido .= "Muzzarella: $cantidadMuzzarella\n";
    }
    
    $pedido .= str_repeat("-", 30) . "\n";

    file_put_contents("pedidos.txt", $pedido, FILE_APPEND);
    echo "<p>Pedido confirmado y guardado.</p>";
}
?>

<form method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" required><br><br>

    <input type="checkbox" id="jamon_queso" name="jamon_queso">
    <label for="jamon_queso">Jamón y Queso</label>
    <label for="cantidad_jamon_queso">Cantidad:</label>
    <input type="text" id="cantidad_jamon_queso" name="cantidad_jamon_queso"><br><br>

    <input type="checkbox" id="napolitana" name="napolitana">
    <label for="napolitana">Napolitana</label>
    <label for="cantidad_napolitana">Cantidad:</label>
    <input type="text" id="cantidad_napolitana" name="cantidad_napolitana"><br><br>

    <input type="checkbox" id="muzzarella" name="muzzarella">
    <label for="muzzarella">Muzzarella</label>
    <label for="cantidad_muzzarella">Cantidad:</label>
    <input type="text" id="cantidad_muzzarella" name="cantidad_muzzarella"><br><br>

    <input type="submit" value="Confirmar">