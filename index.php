<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pepsi - Inicio</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <main>
        <?php include 'header.php'; ?>

        <div class="container">
            <div class="title">
                <h1>Bienvenido</h1>
                <h2>Empecemos</h2>
                <li>
                    <a>Desliza para informacion</a>
                    <br>
                    <button onclick="irAbajo(event)">▼</button>                     
                </li>
            </div>
            <div class="container__img"><img src="https://www.pepsi.com/assets/images/cans/can-2.webp" alt="logo de pepsi"></div>
            
        </div>
        
        <div class="content">

            <div id="content_main" class="content_main">
                <div class="column">
                    <a href="#"><img src="https://www.pepsi.com/s3fs-public/2025-05/3303620_Pepsicom_2025_Work_May_Drop_TShirt_R1_Product%20Tile%20666%20x%20666.png" alt="img de merchandise"></a>
                </div>

                <div class="column">
                    <a href="#"><img src="https://www.pepsi.com/s3fs-public/2025-05/3303620_Pepsicom_2025_Work_May_Drop_FlyingDisc_R1_Product%20Tile%20666%20x%20666.png" alt="img de merchandise"></a>
                </div>

                <div class="column">
                    <a href="http://"><img src="https://www.pepsi.com/s3fs-public/2025-05/3303620_Pepsicom_2025_Work_May_Drop_Cooler_R1_Product%20Tile%20666%20x%20666.png" alt="img de merchandise"></a>
                </div>

            </div>

            <div class="content_title">

                <img src="css/images/pepsi-revamp.png" alt="Pepsi revamp img">

                <h1>¡Participa ahora para tener la oportunidad de ganar una colección
                    de productos retro de edición limitada!</h1>
                <li class="content_title_btn">
                    <a href="login.php">SIGN IN TO ENTER</a>
                </li>
                <li class="content_title_rule">
                    <a href="https://www.pepsi.com/official-rules">U.S. res, 18+ (19+ in AL/NE). Ends 6/10/25.
                         Limit one entry per person/email address per day. Subject to Official Rules.
                         *Actual prize may vary from what’s shown.</a>
                </li>
            </div>

            <div class="videos">
                <iframe src="https://youtu.be/mbfmx1eXLuc" frameborder="0"
                width="1200px" height="560px"></iframe>

                <iframe src="css/videos/pepsi-cans-mobile.mp4" frameborder="0"
                width="1200px" height="560px"></iframe>
            </div>
            
            <section id="seccion-destino"></section>
        </div>
    </main>
    <script src="js/index.js"></script>
    <script src="js/abajo.js"></script>
</body>
<footer>copyright©M/s Pepsi pasantia. All rights reserved</footer>
</html>