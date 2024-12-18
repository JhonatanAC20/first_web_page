<?= $this->extend('include/layout.php'); ?>

<?= $this->section('contenido'); ?>

<main class="vw-nosotros">

    <section class="hero d-flex align-items-center py-3">
        <div class="container d-flex align-items-center">
            <img src="resources/img/gifs/gear.gif" alt="Imagen Nosotros" class="img-fluid me-3" style="max-width: 150px; height: auto;">
            <div>
                <h1 class="display-4 fw-bold" style="color: #f8f8f8;">Nosotros</h1>
                <p class="lead" style="color: #e4e4e4;">Conoce nuestra misión, visión, valores y objetivos.</p>
            </div>
        </div>
    </section>

    <section class="about-us py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="titulo">¿Quiénes Somos?</h2>
                    <p class="parrafo">
                        Somos una empresa especializada en la elaboración de planos y proyectos, mecanizados y fabricaciones, mantenimiento, montaje y desmontaje, tableros eléctricos y electrónicos (PLC), solución integral en climatización (aire acondicionado, refrigeración, chillers).
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="resources/img/SEPI.png" alt="Logo SEPI" class="img-fluid rounded shadow" style="max-height: 200px;">
                </div>
            </div>
        </div>
    </section>

    <section class="objectives-values bg-light py-5">
        <div class="container">
            <div class="row">
                <!-- Objetivos -->
                <div class="col-md-6">
                    <h2 class="titulo">Objetivos</h2>
                    <p class="parrafo">
                        En SEPI S.A.C. queremos consolidarnos como líderes en el ámbito de mantenimiento industrial, climatización y diseño de proyectos.
                        Nos destacamos por la calidad y eficiencia en los servicios que ofrecemos, ampliando nuestra presencia nacional e internacional con alianzas estratégicas y nuevos contratos.
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="resources/img/mantenimiento.jpg" alt="Imagen de objetivos" class="img-fluid rounded shadow" style="max-height: 220px;">
                </div>
                <br>
                </br>
                <!-- Valores -->
                <div class="col-md-6">
                    <h2 class="titulo">Valores</h2>
                    <ul class="parrafo">
                        <li>Responsabilidad</li>
                        <li>Compromiso</li>
                        <li>Constancia</li>
                        <li>Trabajo en equipo</li>
                        <li>Respeto</li>
                        <li>Honestidad</li>
                    </ul>
                </div>
                <div class="col-md-6 text-center">
                    <img src="resources/img/valores.jpg" alt="Imagen de valores" class="img-fluid rounded shadow" style="max-height: 220px;">
                </div>
                <br>
                </br>
                <!-- Misión -->
                <div class="col-md-6">
                    <h2 class="titulo">Misión</h2>
                    <p class="parrafo">
                        Ser líderes en todos nuestros rubros de trabajo, satisfaciendo la necesidad de nuestros clientes con los estándares requeridos en la actualidad.
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="resources/img/mision.jpg" alt="Imagen de misión" class="img-fluid rounded shadow" style="max-height: 220px;">
                </div>
                <br>
                </br>
                <!-- Visión -->
                <div class="col-md-6">
                    <h2 class="titulo">Visión</h2>
                    <p class="parrafo">
                        Posicionar el nombre de nuestra empresa entre las empresas TOP de mantenimiento a nivel nacional e internacional, garantizando la puntualidad y calidad de cada producto realizado.
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="resources/img/vision.jpg" alt="Imagen de visión" class="img-fluid rounded shadow" style="max-height: 220px;">
                </div>
                <br>
                </br>
            </div>
    </section>
</main>

<?= $this->endSection(); ?>