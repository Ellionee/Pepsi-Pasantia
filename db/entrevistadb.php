<?php
include "db/pdodb.php";

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Datos básicos del usuario/candidato
    $nombre = $_POST["nombre"] ?? "";
    $apellido = $_POST["apellido"] ?? "";
    $email = $_POST["email"] ?? "";
    $numero = $_POST["numero"] ?? "";
    $dni = $_POST["dni"] ?? "";
    $sede = $_POST["sede"] ?? "";
    $comentario = $_POST["comentario"] ?? "";

    // Campos opcionales para admin
    $fecha_entrevista = $_POST["fecha_entrevista"] ?? NULL;
    $hora_entrevista = $_POST["hora_entrevista"] ?? NULL;
    $estado_entrevista = $_POST["estado_entrevista"] ?? NULL;
    $tipo_entrevista = $_POST["tipo_entrevista"] ?? NULL;
    $resultado_entrevista = $_POST["resultado_entrevista"] ?? NULL;
    $entrevistador_id = $_POST["entrevistador_id"] ?? NULL;
    $comentario_entrevistador = $_POST["comentario_entrevistador"] ?? NULL;
    $feedback_candidato = $_POST["feedback_candidato"] ?? NULL;
    $duracion_entrevista = $_POST["duracion_entrevista"] ?? NULL;
    $resultado_final = $_POST["resultado_final"] ?? NULL;

    // Validar que el entrevistador exista en la tabla entrevistador (para no romper la FK)
    if (!empty($entrevistador_id)) {
        $checkSql = "SELECT id FROM entrevistador WHERE id = ?";
        $checkStmt = $conn->prepare($checkSql);
        $checkStmt->bind_param("i", $entrevistador_id);
        $checkStmt->execute();
        $checkResult = $checkStmt->get_result();
        if ($checkResult->num_rows === 0) {
            // Si no existe, poner NULL
            $entrevistador_id = NULL;
        }
        $checkStmt->close();
    }

    // Preparar el INSERT
    $sql = "INSERT INTO entrevista (
        nombre, apellido, email, numero, dni, sede, comentario,
        fecha_entrevista, hora_entrevista, estado_entrevista, tipo_entrevista,
        resultado_entrevista, entrevistador_id, comentario_entrevistador,
        feedback_candidato, duracion_entrevista, resultado_final
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Error al preparar la consulta: " . $conn->error);
    }

    $stmt->bind_param(
        "sssssssssssssssis",
        $nombre,
        $apellido,
        $email,
        $numero,
        $dni,
        $sede,
        $comentario,
        $fecha_entrevista,
        $hora_entrevista,
        $estado_entrevista,
        $tipo_entrevista,
        $resultado_entrevista,
        $entrevistador_id,
        $comentario_entrevistador,
        $feedback_candidato,
        $duracion_entrevista,
        $resultado_final
    );

    if ($stmt->execute()) {
        echo "<p style='color: green; position: relative; top: 20px; left: 20px;'>¡Datos guardados exitosamente!</p>";
    } else {
        echo "<p style='color: red; position: relative; top: 20px; left: 20px;'>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
}
?>
