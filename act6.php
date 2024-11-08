<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $edad = (int)$_POST['edad'];
    if ($edad >= 18) {
        echo "$nombre es mayor de edad.";
    } else {
        echo "$nombre es menor de edad.";
    }
} else {
    echo '<form method="post" action="">';
    echo 'Nombre: <input type="text" name="nombre" required><br>';
    echo 'Edad: <input type="number" name="edad" required><br>';
    echo '<input type="submit" value="Enviar">';
    echo '</form>';
}
?>