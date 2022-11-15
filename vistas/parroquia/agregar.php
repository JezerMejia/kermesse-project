<?php
include('datos/dt_parroquia.php');
$page_title = 'Agregar Parroquia';
$dt_parroquia = new DtParroquia();
$parroquias = $dt_parroquia->get_data();
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
            <input class="form-control form-control-solid" type="number" placeholder="ID" disabled />
          </div>

          <div class="mb-3">
            <label>Nombre</label>
            <input class="form-control" type="text">
          </div>

          <div class="mb-3">
            <label>Direccion</label>
            <input class="form-control" type="text">
          </div>

          <div class="mb-3">
            <label>Telefono</label>
            <input class="form-control" type="number">
          </div>

          <div class="mb-3">
            <label>Parroco</label>
            <input class="form-control" type="text">
          </div>

          <div class="mb-3">
            <label>Logo</label>
            <input class="form-control" type="text">
          </div>

          <div class="mb-3">
            <label>Sitio Web</label>
            <input class="form-control" type="text">
          </div>

          <div class="mt-4 d-flex gap-3">
            <button class="btn btn-primary" type="button">Agregar</button>
            <button class="btn btn-secondary" type="button">Cancelar</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</main>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  
</div>
</main>
<?php include('./partials/_footer.php') ?>
