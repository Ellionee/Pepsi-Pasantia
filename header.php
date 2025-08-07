<?php
session_start();
include "configdb.php";
?>
<header>
    <li class="Enlace__logo">
        <a href="index.php"><img src="https://www.pepsi.com/assets/images/pepsi-logos/logo-0.png" alt="Logo de Pepsi"></a>
    </li>
    <button class="menu-btn">≡</button>
    <nav>
        <ul class="menu-items">
            <button class="menu-btn-2">✕</button>
            <img src="https://www.pepsi.com/assets/images/pepsi-logos/logo-0.png" alt="">
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
