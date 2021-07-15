<form action="<?= base_url(); ?>/unidades/insertar" method="post" class="mt-4" autocomplete="off">
    <div class="form-group">
        <div class="row">
            <div class="col-12 col-sm-6">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" required autofocus>
            </div>
            <div class="col-12 col-sm-6">
                <label for="nombre">Nombre Corto</label>
                <input type="text" name="nombre_corto" class="form-control" id="nombre_corto" required>
            </div>
        </div>
    </div>
    <div class="mt-3">
        <a href="<?= base_url('/unidades'); ?>" class="btn btn-warning">Regresar</a>
        <input type="submit" name="boton" class="btn btn-success" id="boton" value="Guardar">
    </div>
</form>