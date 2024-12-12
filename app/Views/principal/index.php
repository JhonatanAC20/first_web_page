<?= $this->extend('include/layout.php'); ?>

<?= $this->section('contenido'); ?>

<main class="vw-principal">
    <div class="row">
        <div class="col-12">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="resources/img/carrusel_principal/SEPI_2019.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="resources/img/carrusel_principal/SEPI_2024.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="resources/img/carrusel_principal/Fresas.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row grid-carrusel">
        <div class="col-md-12 col-lg-4 grid-item">
            <div class="card">
                <img src="resources/img/climatizacion.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Climatización</h5>
                    <p class="card-text">Somos especialistas en ofrecer soluciones de climatización avanzadas para todo tipo de espacios industriales, comerciales y residenciales.</p>
                    <br>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-lg-4 grid-item">
            <div class="card">
                <img src="resources/img/comercializacion.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Comercialización y Servicio</h5>
                    <p class="card-text">Nos especializamos en la comercialización de equipos industriales de última técnologia, ofreciendo soluciones para empresas de diversos sectores.</p>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-lg-4 grid-item">
            <div class="card">
                <img src="resources/img/fabricacion.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Fabricación de Maquinas</h5>
                    <p class="card-text">Somos lideres en la fabricación de maquinaria industrial de alta calidad, especializada en satisfacer las demandas mas exigentes de los sectores de construcción.</p>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
</div>

<?= $this->endSection(); ?>