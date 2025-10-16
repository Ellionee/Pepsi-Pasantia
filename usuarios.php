<?php

include "db/permisos.php";
include "db/pdodb.php";
include "db/admintotal.php";
include "db/services/SearchID.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Usuarios</title>
    <link rel="stylesheet" href="css/usuarios.css">
</head>
<body>

    <h1>Usuarios registrados</h1>

<form method="GET" action="usuarios.php">
    <label for="id">Buscar usuario por ID:</label>
    <input type="number" name="id" id="id" min="1" required>
    <button type="submit" class="search-btn">Buscar</button>
</form>

<?php if ($usuarioBuscado): ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Email</th>
            <th>Rol</th>
        </tr>
        <tr>
            <td><?= htmlspecialchars($usuarioBuscado['id']) ?></td>
            <td><?= htmlspecialchars($usuarioBuscado['user']) ?></td>
            <td><?= htmlspecialchars($usuarioBuscado['email']) ?></td>
            <td class="<?= $usuarioBuscado['role'] === 'admin' ? 'admin' : 'user' ?>">
                <?= htmlspecialchars($usuarioBuscado['role']) ?>
            </td>
        </tr>
    </table>
<?php else: ?>
    <?php if (isset($_GET['id'])): ?>
        <p style="text-align:center;">❌ No se encontró un usuario con ese ID.</p>
    <?php else: ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Email</th>
                <th>Rol</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['id']) ?></td>
                    <td><?= htmlspecialchars($row['user']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td class="<?= $row['role'] === 'admin' ? 'admin' : 'user' ?>">
                        <?= htmlspecialchars($row['role']) ?>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php endif; ?>
<?php endif; ?>

<a href="admin.php" class="back-btn">← Volver al panel admin</a>

</body>
</html>