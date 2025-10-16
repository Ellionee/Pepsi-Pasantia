<?php

$totalUsuarios = $conn->query("SELECT COUNT(*) as total FROM usuarios")->fetch_assoc()['total'];
$admins = $conn->query("SELECT COUNT(*) as total FROM usuarios WHERE role='admin'")->fetch_assoc()['total'];
$usuarios = $totalUsuarios - $admins;

$sql = "SELECT id, user, email, role FROM usuarios ORDER BY id ASC";
$result = $conn->query($sql);

?>