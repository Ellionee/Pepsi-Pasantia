<?php

include "db/pdodb.php";
include "db/services/ProductServices.php";


$pdoproductos = get_all_productos($pdo);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pepsi - Productos</title>
    <link rel="stylesheet" href="css/mainproductos.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    <main>
        <?php include 'header.php'; ?>

        <input id="search" class="buscador" type="search" name="search" placeholder="Busca tu Pepsi...">

        <a href="carrito.php" class="btncarro"><img src="css/images/iconos/icon-carro-compra.png" alt="carrito"></a>
        
        <div class="containerprd">
            <?php foreach ($pdoproductos as $producto): ?>
                <div class="producto-carta">
                    <a href="producto.php?id=<?php echo $producto['id']; ?>">
                        <div class="columnprd">
                            <img class="product-img" src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
                        </div>
                    </a>

                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <script src="js/index.js"></script>
    <script src="js/sp.js"></script>
    <script src="js/productos.js"></script>
</body>
</html>
