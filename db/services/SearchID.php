<?php

$usuarioBuscado = null;

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("SELECT id, user, email, role FROM usuarios WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $usuarioBuscado = $result->fetch_assoc();
    $stmt->close();
} else {
    $result = $conn->query("SELECT id, user, email, role FROM usuarios ORDER BY id ASC");
}

?>