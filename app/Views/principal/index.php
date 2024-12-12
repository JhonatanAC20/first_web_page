<?= $this->extend('include/layout.php'); ?>

<?= $this->section('contenido'); ?>

<body>
    <br>
    <!-- contenido  -->
    <div class="content-section">
        <div class="container">
            <!-- Carrusel con Bootstrap -->
            <div class="row">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="resources/img/sepisac.png" class="d-block w-100" alt="Imagen 1">
                        </div>
                        <div class="carousel-item">
                            <img src="resources/img/comercializacion.png" class="d-block w-100" alt="Imagen 2">
                        </div>
                        <div class="carousel-item">
                            <img src="resources/img/fabricacion.png" class="d-block w-100" alt="Imagen 3">
                        </div>
                    </div>
                    <!-- Controles del carrusel -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">siguiente</span>
                    </button>
                </div>
                <br>
                </br>
            </div>
            
            <div class="row">
                <div class="col-md-4 grid-item">
                    <img src="resources/img/climatizacion.png" alt="Producto 1">
                    <h5>Climatización</h5>
                    <p>Somos especialistas en ofrecer soluciones de climatización avanzadas para todo tipo de espacios industriales, comerciales y residenciales.</p>
                </div>
                <div class="col-md-4 grid-item">
                    <img src="resources/img/comercializacion.png" alt="Producto 2">
                    <h5>Comercialización y Servicio</h5>
                    <p>Nos especializamos en la comercialización de equipos industriales de última técnologia, ofreciendo soluciones para empresas de diversos sectores.</p>
                </div>
                <div class="col-md-4 grid-item">
                    <img src="resources/img/fabricacion.png" alt="Producto 3">
                    <h5>Fabricación de Maquinas</h5>
                    <p>Somos lideres en la fabricación de maquinaria industrial de alta calidad, especializada en satisfacer las demandas mas exigentes de los sectores de construcción.</p>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>