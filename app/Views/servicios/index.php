<?= $this->extend('include/layout.php'); ?>

<?= $this->section('contenido'); ?>

<main class="vw-servicios">
    <section class="hero d-flex align-items-center py-3">
        <div class="container d-flex align-items-center">
            <img src="resources/img/gifs/gear.gif" alt="Imagen Nosotros" class="img-fluid me-3" style="max-width: 150px; height: auto;">
            <div>
                <h1 class="display-4 fw-bold" style="color: #f8f8f8;">Servicios</h1>
                <p class="lead" style="color: #e4e4e4;">Conoce todos nuestros servicios que ofrecemos.</p>
            </div>
        </div>
    </section>
    <div class="container">
        <section id="maestranza" class="animate__animated animate__fadeInDown">
            <h2>Maestranza</h2>
            <ul>
                <li>Diseños y proyectos</li>
                <li>Ingeniería y Reingeniería</li>
                <li>Automatización (PLC)</li>
                <li>Instalaciones eléctricas y neumáticas</li>
                <li>Torneado, fresado, cepillado y prensado</li>
                <li>CNC con 4 ejes</li>
            </ul>
            <img src="resources/img/maestranza.png" class="imagen-uniforme">
        </section>

        <section id="climatizacion" class="animate__animated">
            <h2>Soluciones Integrales en Climatización</h2>
            <p>Comercialización, instalación y mantenimiento de aire acondicionado.</p>
            <img src="resources/img/aire.png" alt="Icono Climatización" class="imagen-uniforme">
        </section>

        <section id="mantenimiento-maquinas" class="animate__animated">
            <h2>Mantenimiento de Máquinas</h2>
            <ul>
                <li>Equipos de alimentación</li>
                <li>Plastificados</li>
                <li>Petroleras</li>
                <li>Envasados</li>
                <li>Trituradoras</li>
            </ul>
            <img src="resources/img/mantenimiento-maquinas.png" alt="Icono Mantenimiento" class="imagen-uniforme">
        </section>

        <section id="diseno-proyectos" class="animate__animated">
            <h2>Diseño de Proyectos</h2>
            <ul>
                <li>Sistemas personalizados para cada industria.</li>
                <li>Asesoramiento en sistemas de climatización: aire acondicionado, calefacción y ventilación mecánica.</li>
                <li>Procedimientos basados en arquitectura, ubicación y necesidades del inmueble.</li>
                <li>Evaluación geográfica, climática y energética.</li>
            </ul>
            <img src="resources/img/diseño.png" alt="Icono Proyectos" class="imagen-uniforme">
        </section>

        <section id="instalaciones" class="animate__animated">
            <h2>Instalaciones</h2>
            <p>Sistemas integrales de aire acondicionado (residenciales, comerciales e industriales). Seguimos altos estándares de calidad con un staff capacitado y experimentado.</p>
            <img src="resources/img/diseñado.png" alt="Icono Instalaciones" class="imagen-uniforme">
        </section>

        <section id="mantenimiento" class="animate__animated">
            <h2>Mantenimiento</h2>
            <p>Planes preventivos y procesos correctivos de aire acondicionado. Soporte técnico y garantía de eficiencia.</p>
            <img src="resources/img/mantenimiento.png" class="imagen-uniforme">
        </section>
    </div>
</main>
</div>
</div>
<?= $this->endSection(); ?>