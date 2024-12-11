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

<header>
    <!-- Barra de navegación -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid"> <!--logo-->
            <a class="navbar-brand" href="../pagina/inicio.php">
                <img src="resources/img/new_logo.png" alt="Logo de la Empresa" width="160"> <!-- Ajusta el tamaño del logo según sea necesario -->
            </a>

            <!-- Botón de menú-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Elementos del menú -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active link-principal" aria-current="page"><i class='bx bxs-home'></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pagina/nosotros.php"><i class='bx bxs-group' ></i> Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pagina/servicios.php"><i class='bx bxs-wrench'></i> Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pagina/inicio.php"><i class='bx bxs-phone-call' ></i> Contactos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    </br>
</header>
<br>