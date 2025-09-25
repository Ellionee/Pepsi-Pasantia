<?php

include "db/perfildb.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $user ? htmlspecialchars($user['user']) . ' | Perfil' : 'Perfil'; ?>
    </title>
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    <main>
        <?php include 'header.php'; ?>

        <section class="perfil-container">
            <?php if ($user): ?>
                <h1><?php echo htmlspecialchars($user['user']); ?></h1>
                <div class="perfil-info">
                    <h1>Datos personales:</h1>
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
                    <p><strong>Teléfono:</strong> <?php echo htmlspecialchars($user['tel']); ?></p>
                    <p><strong>Fecha de Nacimiento:</strong> <?php echo htmlspecialchars($user['date']); ?></p>
                </div>
            <?php else: ?>
                <h2>Error: No se encontró el usuario.</h2>
            <?php endif; ?>
        </section>
    </main>
    <script src="js/index.js"></script>
</body>
</html>
