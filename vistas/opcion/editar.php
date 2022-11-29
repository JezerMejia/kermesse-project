<?php
include('entidades/opcion.php');
include('datos/dt_opcion.php');
$dt_opcion = new DtOpcion();
$opcion = $dt_opcion->find_by_id($id_from_url);
$page_title = 'Editar Opcion';
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <div class="card mb-4 w-100 p-2">
      <div class="card-body">
        <form action="<?php echo $base_url?>/negocio/ng_opcion.php" method="POST">
          <div class="mb-3">
            <label>ID</label>
            <input class="form-control" readonly name="id_opcion" type="text"
              value="<?php echo $opcion__GET('id_opcion') ?>"/>
          </div>

          <div class="mb-3">
            <label>Opcion Descripcion</label>
            <input required class="form-control" type="text" name="opcion_descripcion"
              value="<?php echo $opcion->__GET('opcion_descripcion') ?>">
          </div>

          <input name="estado" type="hidden" value="1">

          <div class="mt-4 d-flex gap-3">
            <button class="btn btn-primary" type="submit">Guardar</button>
            <button class="btn btn-secondary" type="button">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
</div>
</main>
<?php include('./partials/_footer.php') ?>