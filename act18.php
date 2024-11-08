<form action="act18.php" method="post">
    <label for="usuario">Nombre de usuario:</label>
    <input type="text" id="usuario" name="usuario" required><br><br>

    <label for="clave1">Clave:</label>
    <input type="password" id="clave1" name="clave1" required><br><br>

    <label for="clave2">Repetir clave:</label>
    <input type="password" id="clave2" name="clave2" required><br><br>

    <input type="submit" value="Registrar">
</form>


<?php
function verificar_claves($clave1, $clave2) {
    if ($clave1 !== $clave2) {
        echo "Las claves ingresadas no coinciden.";
    } else {
        echo "Registro exitoso.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $clave1 = $_POST["clave1"];
    $clave2 = $_POST["clave2"];

    verificar_claves($clave1, $clave2);
}
?>
