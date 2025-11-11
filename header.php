<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();}

include "db/perfildb.php";
include "db/pdodb.php";

?>

<link rel="stylesheet" href="css/paneladmin.css">
<header>
    <li class="Enlace__logo">
        <a href="index.php"><img src="css/images/pepsi-logo-mini.png" alt="Logo de Pepsi"></a>
    </li>
    <?php echo $_SESSION['username']; ?>
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

            <?php include "db/permisos.php"; ?> 
            
            <?php if ($_SESSION['role'] === 'admin'): ?>
            
            <div class="sidebar">
            <h3 style="color: red;">Panel Admin</h3>

            <a href="admin.php">Inicio</a>
            <a href="usuarios.php">Usuarios</a>
            <a href="entrevistas_admin.php">Entrevista</a>
            <a href="estadisticas.php">Estadísticas</a>
            <a href="configuracion.php">Configuración</a>
            </div>

            <?php endif; ?>

        </ul>
    </nav>
</header>
