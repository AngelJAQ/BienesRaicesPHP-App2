<?php

    if (!isset($_SESSION)){
        session_start();
    }

    $auth = $_SESSION['login'] ?? false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices PHP</title>
    <link rel="stylesheet" href="/BienesRaicesPHP-App/build/css/app.css">
</head>
<body>
    
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/BienesRaicesPHP-App/index.php">
                    <img src="/BienesRaicesPHP-App/build/img/logo.svg" alt="Logo de Bienes y Raices">
                </a>
                
                <div class="mobile-menu">
                    <img src="/BienesRaicesPHP-App/build/img/barras.svg" alt="Icono Menu Responsive">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="/BienesRaicesPHP-App/build/img/dark-mode.svg" alt="icono dark">
                    <nav class="navegacion">
                        <a href="/BienesRaicesPHP-App/nosotros.php">Nosotros</a>
                        <a href="/BienesRaicesPHP-App/anuncios.php">Anuncios</a>
                        <a href="/BienesRaicesPHP-App/blog.php">Blog</a>
                        <a href="/BienesRaicesPHP-App/contacto.php">Contactos</a>
                        <?php if($auth): ?>
                            <a href="/BienesRaicesPHP-App/admin/">Admin</a>
                            <a href="/BienesRaicesPHP-App/cerrar-sesion.php">Cerrar Sesion</a>
                        <?php elseif (!$auth): ?>
                            <a href="/BienesRaicesPHP-App/login.php">Iniciar Sesion</a>
                        <?php endif; ?>
                    </nav>
                </div>


            </div>

            <?php if (isset($inicio) && $inicio): ?>
                <h1>Venta de Casas y Departamentos Exclusivos de Lujos</h1>
            <?php endif; ?>

        </div>
    </header>
