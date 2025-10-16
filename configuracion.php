<?php

include "db/pdodb.php"; 
include "db/permisos.php";
include "db/configperm.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Admin - Configuración</title>
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="css/config.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php include "header.php"; ?>

<div class="main">
  <h2>Actualizar configuración</h2>

  <?php if ($mensaje): ?>
    <div class="mensaje"><?php echo $mensaje; ?></div>
  <?php endif; ?>

  <form method="POST">
    <label for="usuario">Nombre de usuario</label>
    <input type="text" name="usuario" id="usuario" value="<?php echo htmlspecialchars($user['user']); ?>" required>

    <label for="email">Correo electrónico</label>
    <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>

    <label for="password">Nueva contraseña (opcional)</label>
    <input type="password" name="password" id="password" placeholder="Dejar en blanco para no cambiar">

    <button type="submit" class="btn">Guardar cambios</button>
  </form>
</div>

<script src="js/index.js"></script>
</body>
</html>
