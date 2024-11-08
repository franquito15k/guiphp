<html>

<head>
    <title>act 11</title>
</head>

<body>
    <form action="index.php?modulo=act11.1" method="post">
        Ingrese su Nombre: 
        <input type="text" name="nombre" required>
        <br>
        <input type="checkbox" name="op1" value="1" >futbol<br>
        <input type="checkbox" name="op2" value="2" >basket<br>
        <input type="checkbox" name="op3" value="3" >tennis<br>
        <input type="checkbox" name="op4" value="4" >voley<br><br>
        <input type="submit" value="Confirmar"><br>
    </form>
</body>

</html>

<!--11 - FORMULARIO (control checkboxf
Confeccionar un formulario que solicite la carga del nombre de una persona y que permita
seleccionar una serie de deportes que practica (futbol, basket, tennis, voley)
Mostrar en la página que procesa el formulario la cantidad de deportes que practica.-->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        echo "El usuario $nombre practica estos deportes:<br> ";
        
        if (isset($_POST['op1'])) {
            echo "futbol <br>";
        }
        if (isset($_POST['op2'])) {
            echo "basket<br>";
        }
        if (isset($_POST['op3'])) {
            echo "tennis<br>";
        }
        if (isset($_POST['op4'])) {
            echo "voley<br>";
        }
    } else {
        echo "No se ha ingresado un nombre.";
    }
}
?>
