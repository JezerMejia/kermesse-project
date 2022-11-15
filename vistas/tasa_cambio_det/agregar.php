<?php
include('datos/dt_tasa_cambio_det.php');
$page_title = 'Agregar Tasa Cambio Det';
$dt_tasa_cambio = new DtTasaCambio();
$tasas = $dt_tasa_cambio->get_data();
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
            <label>Moneda O</label>
            <select class="form-control">
              <?php foreach ($tasas as $tasa) : ?>
                <option><?php echo ($tasa->__GET('nombre')) ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="mb-3">
            <label>Moneda C</label>
            <select class="form-control">
              <?php foreach ($tasas as $tasa) : ?>
                <option><?php echo ($tasa->__GET('nombre')) ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Mes</label>
            <input class="form-control" type="number" step="1" min="1" max="12" value="1">
          </div>

          <div class="mb-3">
            <label>Año</label>
            <input class="form-control" type="date" step="1" min="1900" value="2022">
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
</div>
</main>
<?php include('./partials/_footer.php') ?>
