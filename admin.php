<?php

include "db/pdodb.php";

include "db/permisos.php";

include "db/admintotal.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Admin - Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/admin.css">
</head>
<body>

<?php include "header.php"; ?>

<div class="main" style="margin-top: 100px; margin-right: 200px;">
  <h2>Resumen General</h2>

  <div class="cards">
    <div class="card">
      <h3>Usuarios totales</h3>
      <p><b><?php echo $totalUsuarios; ?></b></p>
    </div>

    <div class="card">
      <h3>Administradores</h3>
      <p><b><?php echo $admins; ?></b></p>
    </div>

    <div class="card">
      <h3>Usuarios normales</h3>
      <p><b><?php echo $usuarios; ?></b></p>
    </div>
  </div>

  <h2 style="margin-top: 50px;">Gráfico de crecimiento</h2>
  <canvas id="graficoUsuarios" width="400" height="180"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="js/graficausuarios.js"></script>
<script src="js/index.js"></script>
</body>
</html>
