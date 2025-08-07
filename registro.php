<?php

include "configdb.php";

include "registrodb.php";

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
            <h1>REGISTER</h1>
            <p>Let’s start by creating your account<br>Already have an account? <a href="login.php" style="color: white;"><b>Log in</b></a></p>

                <div class="form__email">
                    <input type="text" name="user" id="user-form" placeholder="USER ADDRESS" style="margin-right: 10px; margin-bottom: 10px;"><input type="email" placeholder="EMAIL ADDRESS" name="email" id="name-form"> <input type="password" name="password" placeholder="PASSWORD ADDRESS" id="password-form" style="margin-right: 20px; margin-bottom: 10px;"><input type="password" name="password2" placeholder="PASSWORD CONFIRM" id="password-form"><input type="number" name="tel" id="tel-form" placeholder="TEL NUMBER" style="margin-right: 20px; margin-bottom: 10px;"><input type="date" name="date" id="date-form" placeholder="MM/DD/YYYY" style="width: 230px;">
                </div>
                
                <div class="form__check">
                <p style="font-size: 12px;"><input type="checkbox" class="check" name="checkbox" id="check-form" style="cursor: pointer;">Yes! Sign me up to receive email from PepsiCo Tasty Rewards,<br>
                   PepsiCo and its brands so I never miss out on exciting updates,<br>
                   offers or sweepstakes. You may opt out at any time.</p>
                </div>

                <div class="form__btn">
                    <input type="submit" value="Enviar" id="btn-form" style="margin-top: -20px; margin-bottom: 15px;">
                </div>
                <div class="form__return">
                    <a href="index.php"><b>RETURN HOME</b></a>
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
</body>
</html>