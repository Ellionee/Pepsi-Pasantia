<?php

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $numero = $_POST["numero"];
    $dni = $_POST["dni"];
    $sede = $_POST["sede"];
    $comentario = $_POST["comentario"];

    $sql = "INSERT INTO entrevista (nombre, apellido, email, numero, dni, sede, comentario)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $nombre, $apellido, $email, $numero, $dni, $sede, $comentario);

    if ($stmt->execute()) {
        echo "<p style='color: green; position: relative; top: 800px; left: 20px;'>¡Datos guardados exitosamente!</p>";
    } else {
        echo "<p style='color: red; position: relative; top: 800px; left: 20px;'>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
}
?>