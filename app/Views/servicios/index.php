<?= $this->extend('include/layout.php'); ?>

<?= $this->section('contenido'); ?>
<body>
    <!-- contenido  -->
    <main>
        <div class="container">
            <section id="maestranza">
                <h2>Maestranza</h2>
                <ul>
                    <li>Diseños y proyectos</li>
                    <li>Ingeniería y Reingeniería</li>
                    <li>Automatización (PLC)</li>
                    <li>Instalaciones eléctricas y neumáticas</li>
                    <li>Torneado, fresado, cepillado y prensado</li>
                    <li>CNC con 4 ejes</li>
                </ul>
                <img src="images/maestranza.png" alt="Icono Maestranza">
            </section>

            <section id="climatizacion">
                <h2>Soluciones Integrales en Climatización</h2>
                <p>Comercialización, instalación y mantenimiento de aire acondicionado.</p>
                <img src="images/climatizacion.png" alt="Icono Climatización">
            </section>

            <section id="mantenimiento-maquinas">
                <h2>Mantenimiento de Máquinas</h2>
                <ul>
                    <li>Equipos de alimentación</li>
                    <li>Plastificados</li>
                    <li>Petroleras</li>
                    <li>Envasados</li>
                    <li>Trituradoras</li>
                </ul>
                <img src="images/mantenimiento.png" alt="Icono Mantenimiento">
            </section>

            <section id="diseno-proyectos">
                <h2>Diseño de Proyectos</h2>
                <ul>
                    <li>Sistemas personalizados para cada industria.</li>
                    <li>Asesoramiento en sistemas de climatización: aire acondicionado, calefacción y ventilación mecánica.</li>
                    <li>Procedimientos basados en arquitectura, ubicación y necesidades del inmueble.</li>
                    <li>Evaluación geográfica, climática y energética.</li>
                </ul>
                <img src="images/proyectos.png" alt="Icono Proyectos">
            </section>

            <section id="instalaciones">
                <h2>Instalaciones</h2>
                <p>Sistemas integrales de aire acondicionado (residenciales, comerciales e industriales). Seguimos altos estándares de calidad con un staff capacitado y experimentado.</p>
                <img src="images/instalaciones.png" alt="Icono Instalaciones">
            </section>

            <section id="mantenimiento">
                <h2>Mantenimiento</h2>
                <p>Planes preventivos y procesos correctivos de aire acondicionado. Soporte técnico y garantía de eficiencia.</p>
                <img src="images/soporte.png" alt="Icono Soporte">
            </section>
        </div>
    </main>

<?= $this->endSection(); ?>