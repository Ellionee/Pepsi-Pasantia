<?php

$email = $_SESSION['email'];
$sql = "SELECT * FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nuevoUsuario = trim($_POST['usuario']);
    $nuevoEmail = trim($_POST['email']);
    $nuevaPassword = $_POST['password'];

    if (!empty($nuevoUsuario) && !empty($nuevoEmail)) {
        if (!empty($nuevaPassword)) {
            $hash = password_hash($nuevaPassword, PASSWORD_DEFAULT);
            $update = $conn->prepare("UPDATE usuarios SET user = ?, email = ?, password = ? WHERE email = ?");
            $update->bind_param("ssss", $nuevoUsuario, $nuevoEmail, $hash, $email);
        } else {
            $update = $conn->prepare("UPDATE usuarios SET user = ?, email = ? WHERE email = ?");
            $update->bind_param("sss", $nuevoUsuario, $nuevoEmail, $email);
        }

        if ($update->execute()) {
            $_SESSION['username'] = $nuevoUsuario;
            $_SESSION['email'] = $nuevoEmail;
            $mensaje = "✅ Configuración actualizada correctamente.";
        } else {
            $mensaje = "❌ Error al actualizar los datos.";
        }

        $update->close();
    } else {
        $mensaje = "⚠️ Debes completar los campos obligatorios.";
    }
}

?>