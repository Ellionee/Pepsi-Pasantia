<?php

include "configdb.php";

include "entrevistadb.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/style.css">
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
                    <label for="sedes">Elegi la sede: </label>
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

                <input type="submit" value="Enviar" class="btn-env" id="btn">
            </div>
        </form>
    </main>
    <script src="js/entrevista.js"></script>
    <script src="js/index.js"></script>
</body>
<footer>copyright©M/s Pepsi pasantia. All rights reserved</footer>
</html>