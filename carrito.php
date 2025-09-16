<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pepsi - Carrito</title>
  <link rel="stylesheet" href="css/carrito.css" />
</head>
<body>
  <?php include 'header.php'; ?>

  <input id="search" class="buscador" type="search" name="search" placeholder="Busca tu Pepsi...">

  <main class="carrito-layout">
    
    <div class="carrito-lista" id="lista-productos"></div>

    <div class="carrito-detalle">
      <img id="detalle-img" src="" alt="" />
      <h1 id="detalle-titulo"></h1>
      <h2 id="detalle-descripcion"></h2>
      <h3 id="detalle-precio"></h3>
      <h3 id="detalle-calificacion"></h3>
      <h2 id="detalle-ingredientes"></h2>
    </div>
  </main>

  <script src="js/carrito.js"></script>
  <script src="js/index.js"></script>
</body>
</html>
