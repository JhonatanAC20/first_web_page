<?= $this->extend('include/layout.php'); ?>

<?= $this->section('contenido'); ?>

    <main class="vw-nosotros">
        <!-- contenido  -->
        <div class="row align-items-center contenido">
            <div class="col-md-6">
                <h1 class="titulo">¿Quiénes Somos?</h1>
                <p class="parrafo">
                    Somos una empresa especializada en la elaboración de planos y proyectos, mecanizados y fabricaciones, mantenimiento, montaje y desmontaje, tableros 
                    eléctricos y electrónicos (PLC), solución integra en climatización (aire acondicionado, refrigeración, chillers).
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="resources/img/SEPI.png" alt="Logo SEPI" class="img-fluid" style="max-height: 200px;">
            </div>
        </div>

        <div class="row contenido">
            <div class="col">
                <h1 class="titulo">Misión</h1>
                <p class="parrafo">
                    Ser líderes en todos nuestros rubros de trabajo, satisfaciendo la necesidad de nuestros clientes con los estándares requeridos en la actualidad.
                </p>
            </div>
        </div>

        <div class="row contenido">
            <div class="col">
                <h1 class="titulo">Visión</h1>
                <p class="parrafo">
                    Posicionar el nombre de nuestra empresa entre las empresas TOP de mantenimiento a nivel nacional e internacional, garantizando la puntualidad 
                    y calidad de cada producto realizado.
                </p>
            </div>
        </div>

        <div class="row contenido">
            <div class="col">
                <h1 class="titulo">Objetivos</h1>
                <p class="parrafo">
                    En SEPI S.A.C. queremos consolidarnos como líderes en el ámbito de mantenimiento industrial, climatización y diseño de proyectos.
                    Nos destacamos por la calidad y eficiencia en los servicios que ofrecemos, ampliando nuestra presencia nacional e internacional con 
                    alianzas estratégicas y nuevos contratos.
                </p>
            </div>
        </div>

        <div class="row contenido">
            <div class="col">
                <h1 class="titulo">Valores</h1>
                <ul class="parrafo">
                    <li>Responsabilidad</li>
                    <li>Compromiso</li>
                    <li>Constancia</li>
                    <li>Trabajo en equipo</li>
                    <li>Respeto</li>
                    <li>Honestidad</li>
                </ul>
            </div>
        </div>
    </main>
    </div>
    </div>

    <?= $this->endSection(); ?>