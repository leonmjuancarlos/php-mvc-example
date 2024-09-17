<?php
$pageTitle = "Crear Usuario";
include TEMPLATE_DIR . 'header.php';
?>

<h2>Crear Usuario</h2>

<form action="<?= PROJECT_ROOT ?>/users/create" method="post">
    <label for="name">Nombre:</label>
    <input type="text" name="name" id="name" required>
    <br>
    <label for="age">Edad:</label>
    <input type="number" name="age" id="age" required>
    <br>
    <input type="submit" value="Guardar">
</form>

<?php include TEMPLATE_DIR . 'footer.php'; ?>