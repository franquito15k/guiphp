<section>
    <form action="index.php?modulo=act9.1" method="post">
        Ingrese su Nombre:
        <input type="text" name="nombre">
        <br>
        Ingrese su edad:
        <input type="number" name="edad">
        <br>
        <input type="submit" value="Confirmar">
    </form>
</section>

<?php
if (isset($_POST['nombre']) && isset($_POST['edad'])) {
    $nombre = $_POST['nombre'];
    echo "El usuario $nombre ";
    if ($_POST['edad'] >= 18) {
        echo "es mayor";
    } else {
        echo "es menor";
    }
} else {
    echo "Por favor, complete el formulario.";
}
?>