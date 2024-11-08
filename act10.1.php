<html>

<head>
    <title>act 10</title>
</head>

<body>
    <form action="index.php?modulo=act10.1" method="post">
        Ingrese su Nombre:
        <input type="text" name="nombre" required>
        <br>
        Seleccionar una opcion:<br>
        <input type="radio" name="opcion1" value="1" required>No estudios<br>
        <input type="radio" name="opcion1" value="2" required>Primarios<br>
        <input type="radio" name="opcion1" value="3" required>secundarios<br>
        <br>
        <input type="submit" value="Confirmar">
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    echo "El usuario $nombre tiene estudios de tipo: ";
    if ($_POST['opcion1'] == 1) {
        echo "no estudios";
    } else if ($_POST['opcion1'] == 2) {
        echo "Primarios";
    } else if ($_POST['opcion1'] == 3) {
        echo "Secundarios";
    }
}
?>
<!--10 - FORMULARIO (control radio)
Solicitar que se ingrese por teclado el nombre de una persona y disponer tres controles de
tipo radio que nos permitan seleccionar si la persona: 1-no tiene estudios, 2-estudios
primarios y 3-estudios secundarios.
En la página que procesa eI formulario mostrar el nombre de la persona y un mensaje
indicando el tipo de estudios que posee.-->
