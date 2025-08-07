<?php

include "configdb.php";
include "logindb.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pepsi - Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="container-img">
            <a href="index.html"><img src="https://www.pepsi.com/assets/images/pepsi-logos/logo-0.png"></a>
        </div>
        <form method="POST" class="form_login">
            <h1>SIGN IN</h1>
            <p>Enter your email and password used at registration or your PepsiCo Tasty Rewards credentials to access your account.</p>

                <div class="form__email">
                    <input type="email" placeholder="EMAIL ADDRESS" name="email" id="name-form"> <input type="password" name="password" placeholder="PASSWORD ADDRESS" id="password-form"><span class="mostrar" style="cursor: pointer;" onclick="mostrarContraseña()"><img src="css/images/iconos/show.png" width="20" style="margin-left: -30px; margin-bottom: -5px;"></span>
                </div>

                <div class="form__btn">
                    <input type="submit" value="Enviar" id="btn-form">
                </div>
                
                <div class="form__dbj-btn">
                    Forgot your password? Click <a href="#" style="color: white;">HERE</a> to reset.
                    <hr style="width: 260px;">
                    Not yet registered?
                </div>

                <div class="form__register-btn">
                    <input type="button" value="Registro" id="btn-register">
                </div>
        </form>
    </div>
    <script>
        function mostrarContraseña(){
            const passwordInput = document.getElementById("password-form");
            const icon = document.querySelector(".mostrar");

            if (passwordInput.type === "password"){
                passwordInput.type = "text";
                icon.innerHTML = '<img src="css/images/iconos/show.png" alt="Ocultar" width="20" style="margin-left: -30px; margin-bottom: -5px;">';
            } else{
                passwordInput.type = "password";
                icon.innerHTML = '<img src="css/images/iconos/esconder.png" alt="Ocultar" width="20" style="margin-left: -30px; margin-bottom: -5px;">';
            }
        }
    </script>
    <script src="js/login.js"></script>
</body>
</html>