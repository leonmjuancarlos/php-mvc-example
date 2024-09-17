<?php
$pageTitle = "Editar Usuario";
include TEMPLATE_DIR . 'header.php';
?>

<h2>Editar Usuario</h2>

<form action="<?= PROJECT_ROOT . '/users/edit' ?>" method="POST">
    <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']); ?>">
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name" value="<?= htmlspecialchars($user['name']); ?>" required>
    <br>
    <label for="age">Edad:</label>
    <input type="number" id="age" name="age" value="<?= htmlspecialchars($user['age']); ?>" required>
    <br>
    <button type="submit">Actualizar</button>
</form>

<?php include TEMPLATE_DIR . 'footer.php'; ?>