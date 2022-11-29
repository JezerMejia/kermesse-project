<?php
include('datos/dt_tasa_cambio_det.php');
include('datos/dt_moneda.php');
$page_title = 'Editar Tasa Cambio Det';
$dt_tasa_cambio = new DtTasaCambioDet();
$dt_moneda = new DtMoneda();
$detalle = $dt_tasa_cambio->find_by_id($id_from_url);
$monedas = $dt_moneda->get_data();
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title - $id_from_url") ?></h1>
    <div class="card mb-4 w-100 p-2">
      <div class="card-body">
        <form action="<?php echo $base_url ?>/negocio/ng_tasa_cambio_det.php" method="POST">
          <input name="estado" type="hidden" value="1">
          <input name="parent_id" type="hidden" value="<?php echo $_GET['parent_id'] ?>">

          <div class="mb-3">
            <label>ID</label>
            <input name="id_tasa_cambio_det" type="text" readonly class="form-control"
            value="<?php echo $detalle->__GET('id_tasa_cambio_det') ?>" />
          </div>

          <div class="mb-3">
            <label>Fecha</label>
            <input class="form-control" type="date" name="fecha" value="<?php echo $detalle->__GET('fecha') ?>">
          </div>

          <div class="mb-3">
            <label>Tipo cambio</label>
            <input class="form-control" step="0.0001" type="number" name="tipo_cambio"
            value="<?php echo $detalle->__GET('tipo_cambio') ?>">
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