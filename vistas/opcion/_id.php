<?php
include_once('entidades/opcion.php');
include_once('datos/dt_opcion.php');

$dt_opcion = new DtOpcion();
$opcion = $dt_opcion->find_by_id($id_from_url);
$page_title = 'Opcion';
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
    <div class="card mb-4 w-100 p-2">
      <div class="card-body">
      <form>
          <div class="mb-3">
            <label>ID</label>
            <input class="form-control" readonly type="number" name="id_opcion"
              value="<?php echo $opcion->__GET('id_opcion')?>"/>
          </div>

          <div class="mb-3">
            <label>Descripcion</label>
            <input class="form-control" readonly type="text" name="descripcion"
              value="<?php echo $opcion->__GET('descripcion')?>"/>
          </div>

          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
<?php include('./partials/_footer.php') ?>
