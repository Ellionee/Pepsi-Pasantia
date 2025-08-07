<?php
session_start();

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim(strtolower($_POST["email"]));
    $password = $_POST["password"];

    $sql = "SELECT * FROM registro WHERE email = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error en la preparación de la consulta: " . $conn->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {

            $_SESSION['email'] = $user['email'];
            $_SESSION['username'] = $user['user'];

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $checkSql = "SELECT * FROM usuarios WHERE email = ?";
            $checkStmt = $conn->prepare($checkSql);
            $checkStmt->bind_param("s", $email);
            $checkStmt->execute();
            $checkResult = $checkStmt->get_result();

            if ($checkResult->num_rows === 1) {
                $updateSql = "UPDATE usuarios SET password = ? WHERE email = ?";
                $updateStmt = $conn->prepare($updateSql);
                $updateStmt->bind_param("ss", $hashed_password, $email);
                $updateStmt->execute();
                $updateStmt->close();
            } else {
                $insertSql = "INSERT INTO usuarios (email, password) VALUES (?, ?)";
                $insertStmt = $conn->prepare($insertSql);
                $insertStmt->bind_param("ss", $email, $hashed_password);
                $insertStmt->execute();
                $insertStmt->close();
            }

            $checkStmt->close();

            header("Location: index.php");
            exit;

        } else {
            echo "<p style='color: red; font-weight: bold; position: absolute; margin-top: 440px; margin-left: 670px;'>Contraseña incorrecta</p>";
        }

    } else {
        echo "<p style='color: red; font-weight: bold; position: absolute; margin-top: 440px; margin-left: 410px;'>Email no encontrado</p>";
    }

    $stmt->close();
}
?>
