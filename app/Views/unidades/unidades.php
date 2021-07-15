<h3 class="mt-4"><?= $titulo ?></h3>
<div>
    <p>
        <a href="<?= base_url('/Unidades/nuevo'); ?>" class="btn btn-info">Agregar</a>
        <a href="<?= base_url('/Unidades/eliminados'); ?>" class="btn btn-warning">Eliminados</a>
    </p>
</div>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Nombre Corto</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($datos as $item): ?>
                <tr>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['nombre'] ?></td>
                    <td><?= $item['nombre_corto'] ?></td>
                    <td><a href="<?= base_url("/Unidades/editar"); ?>/<?= $item["id"]; ?>" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a></td>
                    <td><a href="<?= base_url("/Unidades/eliminar"); ?>/<?= $item["id"]; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>