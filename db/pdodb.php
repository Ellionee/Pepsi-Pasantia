<?php

$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_de_datos = "pasantia";
$conn = new mysqli($host, $usuario, $contrasena, $base_de_datos);

try {
    $pdo = new PDO('mysql:host=localhost;dbname=pasantia', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return  $pdo;
}

   
catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

?>