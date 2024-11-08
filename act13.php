<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contratoModificado = $_POST["contrato"];
    echo "<h2>Contrato Modificado:</h2>";
    echo "<p>" . nl2br(htmlspecialchars($contratoModificado)) . "</p>";
} else {
?>
    <form method="post">
        <label for="contrato">Contrato:</label><br>
        <textarea id="contrato" name="contrato" rows="10" cols="50">Yo, ____________, acepto los términos y condiciones del contrato...</textarea><br><br>
        <input type="submit" value="Enviar">
    </form>
<?php
}
?>