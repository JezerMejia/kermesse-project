<?php
include('entidades/moneda.php');
include('datos/dt_moneda.php');
$dt_moneda = new DtMoneda();
$moneda = $dt_moneda->find_by_id($id_from_url);
$page_title = 'Editar Moneda';
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <div class="card mb-4 w-100 p-2">
      <div class="card-body">
        <form action="<?php echo $base_url?>/negocio/ng_moneda.php" method="POST">
          <div class="mb-3">
            <label>ID</label>
            <input class="form-control" readonly name="id_moneda" type="text"
              value="<?php echo $moneda->__GET('id_moneda') ?>"/>
          </div>

          <div class="mb-3">
            <label>Nombre</label>
            <input required class="form-control" type="text" name="nombre"
              value="<?php echo $moneda->__GET('nombre') ?>">
          </div>

          <div class="mb-3">
            <label>Simbolo</label>
            <input required class="form-control" type="text" name="simbolo"
              value="<?php echo $moneda->__GET('simbolo') ?>">
          </div>

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

