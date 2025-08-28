<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = trim($_POST["user"]);
    $email = trim(strtolower($_POST["email"]));
    $password = $_POST["password"];
    $password2 = $_POST["password2"];
    $tel = trim($_POST["tel"]);
    $date = $_POST["date"];

    if ($password !== $password2) {
        echo "<script>
                alert('❌ Las contraseñas no coinciden.');
                window.location.href = 'registro.php';
              </script>";
        exit;
    }

    $check_sql = "SELECT id FROM registro WHERE email = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        echo "<script>
                alert('❌ El email ya está registrado.');
                window.location.href = 'registro.php';
              </script>";
        exit;
    }
    $check_stmt->close();

    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO registro (user, email, password, tel, date) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        echo "<script>
                alert('❌ Error en el servidor: " . $conn->error . "');
                window.location.href = 'registro.php';
              </script>";
        exit;
    }

    $stmt->bind_param("sssss", $user, $email, $password_hashed, $tel, $date);

    if ($stmt->execute()) {
        echo "<script>
                alert('✅ Registro exitoso. Ahora puedes iniciar sesión.');
                window.location.href = 'Login.php';
              </script>";
    } else {
        echo "<script>
                alert('❌ Error al registrar: " . $stmt->error . "');
                window.location.href = 'registro.php';
              </script>";
    }

    $stmt->close();
}
?>
