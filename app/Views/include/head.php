<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEPI <?= $titulo ?></title>
    <link rel="stylesheet" href="resources/icons/boxicons-2.1.4/boxicons-2.1.4/css/boxicons.css" type="text/css">
    <link rel="stylesheet" href="resources/framework/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="resources/css/styles.css" type="text/css">
</head>

<body>
    <div class="loader"></div>
    <div class="content-section">
        <div class="container-fluid">
            <header>
                <nav id="navbar" class="navbar navbar-expand-lg fixed-top">
                    <a class="navbar-brand" href="../pagina/inicio.php">
                        <img src="resources/img/SEPII.png" alt="Logo de la Empresa" width="160"> <!-- Ajusta el tamaño del logo según sea necesario -->
                        <div class="line"></div>
                    </a>

                    <!-- Botón de menú-->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Elementos del menú -->
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto links">
                            <li class="nav-item">
                                <a class="nav-link link-principal"><i class='bx bxs-home'></i> Inicio</a>
                                <div class="line-select-principal"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-nosotros"><i class='bx bxs-group'></i> Nosotros</a>
                                <div class="line-select-nosotros"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-servicios"><i class='bx bxs-wrench'></i> Servicios</a>
                                <div class="line-select-servicios"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-contactos"><i class='bx bxs-phone-call'></i> Contactos</a>
                                <div class="line-select-contactos"></div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>