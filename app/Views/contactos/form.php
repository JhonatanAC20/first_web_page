<?= $this->extend('include/layout.php'); ?>

<?= $this->section('contenido'); ?>

<main class="vw-contactos">
    <div class="row">
        <div class="columna col-12">
            <div class="widget nueva_entrada">
                <h3 class="titulo">Nuevo Mensaje</h3>
                <form action="">
                    <input type="text" placeholder="Titulo de la entrada" />
                    <textarea placeholder="Lorem ipsum dolor sit amet consectetur"></textarea>
                    <div class="d-flex justify-content-end">
                        <button>Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
</div>
</div>
<?= $this->endSection(); ?>