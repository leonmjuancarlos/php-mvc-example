<?php
$pageTitle = "Lista de Usuarios";
include TEMPLATE_DIR . 'header.php';
?>

<table>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= htmlspecialchars($user['name']); ?></td>
            <td><?= htmlspecialchars($user['age']); ?></td>
            <td><a href="<?= PROJECT_ROOT . '/users/edit?' . http_build_query(['id' => $user['id']]) ?>">Editar</a></td>
            <td>
                <form action="<?= PROJECT_ROOT . '/users/delete' ?>" method="POST">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']); ?>">
                    <button type="submit">Borrar</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

<?php include TEMPLATE_DIR . 'footer.php'; ?>