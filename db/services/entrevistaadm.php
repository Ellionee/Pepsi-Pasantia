<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $sql = "UPDATE entrevista SET
        fecha_entrevista=?, hora_entrevista=?, estado_entrevista=?, resultado_entrevista=?,
        entrevistador_id=?, comentario_entrevistador=?, feedback_candidato=?,
        duracion_entrevista=?, resultado_final=? 
        WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "ssssisssii",
        $_POST['fecha_entrevista'],
        $_POST['hora_entrevista'],
        $_POST['estado_entrevista'],
        $_POST['resultado_entrevista'],
        $_POST['entrevistador_id'],
        $_POST['comentario_entrevistador'],
        $_POST['feedback_candidato'],
        $_POST['duracion_entrevista'],
        $_POST['resultado_final'],
        $_POST['id']
    );
    $stmt->execute();
    $stmt->close();
}

// Búsqueda
$busqueda = "";
$where = "";
$params = [];
$types = "";

if (isset($_GET['buscar']) && !empty($_GET['buscar'])) {
    $busqueda = trim($_GET['buscar']);
    if (is_numeric($busqueda)) {
        $where = "WHERE id = ?";
        $params[] = $busqueda;
        $types .= "i";
    } else {
        $where = "WHERE nombre LIKE ?";
        $params[] = "%".$busqueda."%";
        $types .= "s";
    }
}

// Obtener entrevistas
$sql = "SELECT * FROM entrevista $where ORDER BY id ASC";
$stmt = $conn->prepare($sql);
if (!empty($params)) { $stmt->bind_param($types, ...$params); }
$stmt->execute();
$result = $stmt->get_result();

?>