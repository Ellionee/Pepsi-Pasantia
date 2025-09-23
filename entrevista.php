<?php

include "db/pdodb.php";

include "db/entrevistadb.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pepsi - Formulario</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    <main>
        <?php include 'header.php'; ?>
        
        <form method="POST" action="">
        <div class="form__div">
            <h1>Entrevista de trabajo</h1>
            <h2>Saque su turno</h2>
        
            <div class="form__div__div">
                <label for="input">Nombre: </label>
                <input type="text" name="nombre" required placeholder="xxxxx" id="name-form">

                <label for="input">Apellido: </label>
                <input type="text" name="apellido" required placeholder="xxxxx" id="adress-form">
            </div>

            <div class="form__div__div">
                <label for="input">Email: </label>
                <input type="text" name="email" required placeholder="@gmail" id="email-form">

                <label for="input">Numero: </label>
                <input type="number" name="numero" required placeholder="10 caracteres" id="tel-form">
            </div>

            <div class="form__dni">
                <label for="input">DNI: </label>
                <input type="number" name="dni" required placeholder="8 caracteres" id="dni-form">
            </div>

            <div>
                <label for="sedes">Elegí la sede: </label>
                <select name="sede" required id="sede-form">
                    <option value="Ayacucho 533-Don torcuato">Ayacucho 533-Don torcuato</option>
                    <option value="Tuyuti 1026 -San fernando">Tuyuti 1026 -San fernando</option>
                    <option value="Matheu 784-Garin">Matheu 784-Garin</option>
                    <option value="Milberg 666-Benavidez">Milberg 666-Benavidez</option>
                </select>
            </div>

            <div>
                <h4>Contanos sobre vos:</h4>
                <textarea name="comentario" id="info-form" placeholder="Escribe algo..."></textarea>
            </div>

            <?php include "db/permisos.php"; ?> 
            
            <?php if ($_SESSION['role'] === 'admin'): ?>
                <div>
                    <label for="fecha_entrevista">Fecha de la Entrevista: </label>
                    <input type="date" name="fecha_entrevista" required id="fecha-form">
                </div>

                <div>
                    <label for="hora_entrevista">Hora de la Entrevista: </label>
                    <input type="time" name="hora_entrevista" required id="hora-form">
                </div>

                <div>
                    <label for="estado_entrevista">Estado de la Entrevista: </label>
                    <select name="estado_entrevista" required id="estado-form">
                        <option value="pendiente">Pendiente</option>
                        <option value="realizada">Realizada</option>
                        <option value="cancelada">Cancelada</option>
                        <option value="reprogramada">Reprogramada</option>
                    </select>
                </div>

                <div>
                    <label for="tipo_entrevista">Tipo de Entrevista: </label>
                    <select name="tipo_entrevista" required id="tipo-form">
                        <option value="presencial">Presencial</option>
                        <option value="telefónica">Telefónica</option>
                        <option value="videollamada">Videollamada</option>
                    </select>
                </div>

                <div>
                    <label for="resultado_entrevista">Resultado de la Entrevista: </label>
                    <select name="resultado_entrevista" required id="resultado-form">
                        <option value="aprobada">Aprobada</option>
                        <option value="rechazada">Rechazada</option>
                        <option value="en espera">En espera</option>
                    </select>
                </div>

                <div>
                    <label for="entrevistador_id">ID del Entrevistador: </label>
                    <input type="number" name="entrevistador_id" required placeholder="ID del entrevistador" id="entrevistador-form">
                </div>

                <div>
                    <h4>Comentario del Entrevistador: </h4>
                    <textarea name="comentario_entrevistador" id="comentario-entrevistador-form" placeholder="Comentario del entrevistador..."></textarea>
                </div>

                <div>
                    <h4>Feedback del Candidato: </h4>
                    <textarea name="feedback_candidato" id="feedback-form" placeholder="Escribe tu feedback..."></textarea>
                </div>

                <div>
                    <label for="duracion_entrevista">Duración de la Entrevista (en minutos): </label>
                    <input type="number" name="duracion_entrevista" required placeholder="Duración en minutos" id="duracion-form">
                </div>

                <div>
                    <label for="resultado_final">Resultado Final: </label>
                    <select name="resultado_final" required id="resultado-final-form">
                        <option value="aceptado">Aceptado</option>
                        <option value="rechazado">Rechazado</option>
                        <option value="en espera">En espera</option>
                    </select>
                </div>
            <?php endif; ?>

            <input type="submit" value="Enviar" class="btn-env" id="btn">
        </div>
        </form>
    </main>
    <script src="js/entrevista.js"></script>
    <script src="js/index.js"></script>
</body>
<footer>copyright©M/s Pepsi pasantia. All rights reserved</footer>
</html>