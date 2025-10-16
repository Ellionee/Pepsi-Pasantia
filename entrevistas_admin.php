<?php

include "db/permisos.php";
include "db/pdodb.php";
include "db/services/entrevistaadm.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin - Entrevista</title>
<style>
body { font-family: Arial; background:#0f172a; color:#f1f5f9; padding:20px; }
h1 { text-align:center; color:#38bdf8; }
table { width:95%; margin:0 auto; border-collapse: collapse; background:#1e293b; }
th, td { padding:8px; border-bottom:1px solid #334155; font-size:14px; }
th { background:#334155; }
tr:hover { background:#475569; }
input, select, textarea { padding:4px; border-radius:4px; border:1px solid #ccc; width:100%; }
.action-btn { padding:4px 8px; border-radius:4px; text-decoration:none; margin-right:3px; font-size:12px; cursor:pointer; }
.edit-btn { background:#4e73df; color:white; }
.edit-btn:hover { background:#3451b2; }
.submit-btn { background:#22c55e; color:white; padding:5px 10px; border:none; border-radius:4px; cursor:pointer; }
.submit-btn:hover { background:#16a34a; }
.delete-btn { background:#f87171; color:white; }
.delete-btn:hover { background:#dc2626; }
form { margin:0; }
</style>
</head>
<body>

<h1>Gestión de Entrevistas</h1>

<form method="GET" style="text-align:center; margin-bottom:10px;">
    <input type="text" name="buscar" placeholder="Buscar por ID o nombre..." value="<?= htmlspecialchars($busqueda) ?>">
    <button type="submit" class="action-btn edit-btn">🔍 Buscar</button>
</form>

<table>
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Email</th>
    <th>Sede</th>
    <th>Tipo</th>
    <th>Fecha/Hora</th>
    <th>Estado</th>
    <th>Resultado</th>
    <th>Acciones</th>
</tr>

<?php while($row = $result->fetch_assoc()): ?>
<tr>
    <form method="POST">
        <td><?= $row['id'] ?><input type="hidden" name="id" value="<?= $row['id'] ?>"></td>
        <td><?= htmlspecialchars($row['nombre'].' '.$row['apellido']) ?></td>
        <td><?= htmlspecialchars($row['email']) ?></td>
        <td><?= htmlspecialchars($row['sede']) ?></td>
        <td><?= htmlspecialchars($row['tipo_entrevista']) ?></td>
        <td>
            <input type="date" name="fecha_entrevista" value="<?= $row['fecha_entrevista'] ?>">
            <input type="time" name="hora_entrevista" value="<?= $row['hora_entrevista'] ?>">
        </td>
        <td>
            <select name="estado_entrevista">
                <option value="pendiente" <?= $row['estado_entrevista']=='pendiente'?'selected':'' ?>>Pendiente</option>
                <option value="realizada" <?= $row['estado_entrevista']=='realizada'?'selected':'' ?>>Realizada</option>
                <option value="cancelada" <?= $row['estado_entrevista']=='cancelada'?'selected':'' ?>>Cancelada</option>
                <option value="reprogramada" <?= $row['estado_entrevista']=='reprogramada'?'selected':'' ?>>Reprogramada</option>
            </select>
        </td>
        <td>
            <select name="resultado_final">
                <option value="aceptado" <?= $row['resultado_final']=='aceptado'?'selected':'' ?>>Aceptado</option>
                <option value="rechazado" <?= $row['resultado_final']=='rechazado'?'selected':'' ?>>Rechazado</option>
                <option value="en espera" <?= $row['resultado_final']=='en espera'?'selected':'' ?>>En espera</option>
            </select>
        </td>
        <td>
            <input type="number" name="duracion_entrevista" value="<?= $row['duracion_entrevista'] ?>" style="width:60px"><br>
            <input type="number" name="entrevistador_id" value="<?= $row['entrevistador_id'] ?>" style="width:60px"><br>
            <textarea name="comentario_entrevistador" placeholder="Comentario..."><?= $row['comentario_entrevistador'] ?></textarea>
            <textarea name="feedback_candidato" placeholder="Feedback..."><?= $row['feedback_candidato'] ?></textarea>
        </td>
        <td>
            <button type="submit" class="submit-btn">💾 Guardar</button>
            <a href="eliminar_entrevista.php?id=<?= $row['id'] ?>" class="action-btn delete-btn">🗑️ Eliminar</a>
        </td>
    </form>
</tr>
<?php endwhile; ?>

</table>

<a href="admin.php" class="submit-btn" style="display:block; width:180px; margin:20px auto;">← Volver al panel admin</a>

</body>
</html>
