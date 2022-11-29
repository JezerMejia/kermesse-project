<?php
include('datos/dt_tasa_cambio.php');
include('datos/dt_moneda.php');
$page_title = 'Agregar Tasa Cambio Det';
$dt_tasa_cambio = new DtTasaCambio();
$dt_moneda = new DtMoneda();
$tasas = $dt_tasa_cambio->get_data();
$monedas = $dt_moneda->get_data();
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
    <div class="card mb-4 w-100 p-2">
      <div class="card-body">
        <form action="<?php echo $base_url ?>/negocio/ng_tasa_cambio_det.php" method="POST">
          <input name="estado" type="hidden" value="1">
          <input name="parent_id" type="hidden" value="<?php echo $_GET['parent_id'] ?>">
          <input name="id_tasa_cambio" type="hidden" value="<?php echo $_GET['parent_id'] ?>">

          <div class="mb-3">
            <label>Fecha</label>
            <input class="form-control" type="date" name="fecha">
          </div>

          <div class="mb-3">
            <label>Tipo cambio</label>
            <input class="form-control" step="0.0001" type="number" name="tipo_cambio">
          </div>

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