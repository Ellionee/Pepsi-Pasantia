<?php

include "db/pdodb.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $pdo->prepare("SELECT * FROM productos WHERE id = ?");
    $stmt->execute([$id]);
    $producto = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Producto Pepsi</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/productosmain.css">
  <link rel="stylesheet" href="css/header.css">
</head>
<body>
    <main class="main-body">
      <?php include 'header.php'; ?>

        <div class="product-view">
          <div id="etiqueta"></div>
          <div class="fondoimg"><img id="img-pepsi" alt="pepsi lata"></div>
        </div>
        
        <div class="flechas">
          <button id="fiz" class="flecha-izquierda">◄</button>
          <button id="fde" class="flecha-derecha">►</button>
        </div>
    </main>
  <script src="js/index.js"></script>
  <script src="js/productos.js"></script>
</body>
</html>
