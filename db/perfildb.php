<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();}

require_once "db/pdodb.php";

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['username'];

if (!isset($conn)) {
    die("Error: No se pudo establecer la conexión con la base de datos.");
}

$sql = "SELECT * FROM usuarios WHERE user = ?";
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