<?php
include_once('entidades/moneda.php');
$page_title = 'Agregar Moneda';
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
            <input required class="form-control" type="number" name="ID">
          </div>

          <div class="mb-3">
            <label>Nombre</label>
            <input required class="form-control" type="text" name="nombre">
          </div>

          <div class="mb-3">
            <label>Simbolo</label>
            <input required class="form-control" type="text" name="simbolo">
          </div>

          <input name="estado" type="hidden" value="1">

          <div class="mt-4 d-flex gap-3">
            <button class="btn btn-primary" type="submit">Agregar</button>
            <button class="btn btn-secondary" type="button">Cancelar</button>
          </div>

        </form>
      </div>
    </div>
</div>
</main>
<?php include('./partials/_footer.php') ?>
