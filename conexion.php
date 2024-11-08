<?php
// Datos de conexión
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ucp2024";

// Crear conexión
$con = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexión
if (!$con) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>