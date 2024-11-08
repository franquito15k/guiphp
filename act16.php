<?php
$archivo = "pedidos.txt";
if (file_exists($archivo)) {
    $contenido = file_get_contents($archivo);
    echo "<pre>" . htmlspecialchars($contenido) . "</pre>";
} else {
    echo "<p>No hay pedidos guardados.</p>";
}
?>