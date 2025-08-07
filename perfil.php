<?php
session_start();
require_once "configdb.php";

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['username'];

if (!isset($conn)) {
    die("Error: No se pudo establecer la conexión con la base de datos.");
}

$sql = "SELECT * FROM registro WHERE user = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Error en la preparación de la consulta: " . $conn->error);
}
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

$user = null;

if ($result && $result->num_rows === 1) {
    $user = $result->fetch_assoc();
}
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
</head>
<body>
    <main>
        <?php include 'header.php'; ?>

        <section class="perfil-container">
            <?php if ($user): ?>
                <h1>Perfil de <?php echo htmlspecialchars($user['user']); ?></h1>
                <div class="perfil-info">
                    <p><strong>Nombre de usuario:</strong> <?php echo htmlspecialchars($user['user']); ?></p>
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
                    <p><strong>Teléfono:</strong> <?php echo htmlspecialchars($user['tel']); ?></p>
                    <p><strong>Fecha de registro:</strong> <?php echo htmlspecialchars($user['date']); ?></p>
                </div>
            <?php else: ?>
                <h2>Error: No se encontró el usuario.</h2>
            <?php endif; ?>
        </section>
    </main>
</body>
</html>
