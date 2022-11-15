<?php
include('datos/dt_kermesse.php');
$page_title = 'Agregar Arqueo Caja';
$dt_kermesse = new DtKermesse();
$kermesses = $dt_kermesse->get_data();
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
            <label>Kermesse</label>
            <select class="form-control">
              <?php foreach ($kermesses as $kermesse) : ?>
                <option><?php echo ($kermesse->__GET('nombre')) ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Fecha</label>
            <input class="form-control" type="date">
          </div>

          <div class="mb-3">
            <label>Gran total</label>
            <input class="form-control" type="number">
          </div>

          <div class="mb-3">
            <div class="form-check">
              <label class="form-check-label" for="estado">Activo?</label>
              <input class="form-check-input" id="estado" type="checkbox" value="">
            </div>
          </div>

          <div class="mt-4 d-flex gap-3">
            <button class="btn btn-primary" type="button">Agregar</button>
            <button class="btn btn-secondary" type="button">Cancelar</button>
          </div>

        </form>
      </div>
    </div>
</main>
<?php include('./partials/_footer.php') ?>