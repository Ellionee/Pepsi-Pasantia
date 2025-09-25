<?php

include "db/pdodb.php";

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
    $fecha_entrevista = $_POST["fecha_entrevista"];
    $hora_entrevista = $_POST["hora_entrevista"];
    $estado_entrevista = $_POST["estado_entrevista"];
    $tipo_entrevista = $_POST["tipo_entrevista"];
    $resultado_entrevista = $_POST["resultado_entrevista"];
    $entrevistador_id = $_POST["entrevistador_id"];
    $comentario_entrevistador = $_POST["comentario_entrevistador"];
    $feedback_candidato = $_POST["feedback_candidato"];
    $duracion_entrevista = $_POST["duracion_entrevista"];
    $resultado_final = $_POST["resultado_final"];

    $sql = "INSERT INTO entrevista (
        nombre, apellido, email, numero, dni, sede, comentario,
        fecha_entrevista, hora_entrevista, estado_entrevista, tipo_entrevista,
        resultado_entrevista, entrevistador_id, comentario_entrevistador,
        feedback_candidato, duracion_entrevista, resultado_final
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    
    $stmt->bind_param(
        "ssssssssssssssss", 
        $nombre, $apellido, $email, $numero, $dni, $sede, $comentario,
        $fecha_entrevista, $hora_entrevista, $estado_entrevista, $tipo_entrevista,
        $resultado_entrevista, $entrevistador_id, $comentario_entrevistador,
        $feedback_candidato, $duracion_entrevista, $resultado_final
    );

    if ($stmt->execute()) {
        echo "<p style='color: green; position: relative; top: 800px; left: 20px;'>¡Datos guardados exitosamente!</p>";
    } else {
        echo "<p style='color: red; position: relative; top: 800px; left: 20px;'>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
}

?>
