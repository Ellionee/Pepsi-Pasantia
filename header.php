<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();}

include "db/perfildb.php";
include "db/pdodb.php";

?>

<header>
    <li class="Enlace__logo">
        <a href="index.php"><img src="css/images/pepsi-logo-mini.png" alt="Logo de Pepsi"></a>
    </li>
    <button id="btn-main" class="menu-btn" style="cursor: pointer;">≡</button>
    <nav>
        <ul id="main-items" class="menu-items">
            <button id="btn-close" class="menu-btn-2" style="cursor: pointer;">✕</button>
            <img src="css/images/pepsi-logo-mini.png" alt="">
            <li class="items_inicio"><a href="index.php">Inicio</a></li>
            <li class="items_productos"><a href="productos.php">Productos</a></li>
            <li class="items_contacto"><a href="contacto.php">Contacto</a></li>
            <li class="items_entrevista"><a href="entrevista.php">Entrevista</a></li>

            <?php if (isset($_SESSION['username'])): ?>
                <li class="items_login">
                    <a href="perfil.php"><?php echo htmlspecialchars($_SESSION['username']); ?></a>
                </li>
                <li class="items_login"><a href="logout.php">Cerrar sesión</a></li>
            <?php else: ?>
                <li class="items_login"><a href="login.php">Login</a></li>
            <?php endif; ?>


        </ul>
    </nav>
</header>
