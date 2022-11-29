<?php
include('entidades/comunidad.php');
include('datos/dt_comunidad.php');

$dt_comunidad = new DtComunidad();
$comunidad = $dt_comunidad->find_by_id($id_from_url);
$page_title = 'Comunidad';
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
            <input class="form-control" readonly type="number" name="id_comunidad"
              value="<?php echo $comunidad->__GET('id_comunidad')?>"/>
          </div>

          <div class="mb-3">
            <label>Nombre</label>
            <input class="form-control" readonly type="text" name="nombre"
              value="<?php echo $comunidad->__GET('nombre')?>"/>
          </div>

          <div class="mb-3">
            <label>Responsable</label>
            <input class="form-control" readonly type="text" name="responsable"
              value="<?php echo $comunidad->__GET('responsable')?>"/>
          </div>

          <div class="mb-3">
            <label>Contribucion</label>
            <input class="form-control" readonly type="date" name="contribucion"
              value="<?php echo $comunidad->__GET('contribucion')?>">
          </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</main>
<?php include('./partials/_footer.php') ?>