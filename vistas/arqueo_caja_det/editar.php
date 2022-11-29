<?php
include('entidades/arqueo_caja_det.php');
include('datos/dt_arqueo_caja_det.php');
include('datos/dt_moneda.php');
include('datos/dt_denominacion.php');
$page_title = 'Editar Arqueo Caja Det';
$dt_moneda = new DtMoneda();
$dt_denominacion = new DtDenominacion();
$dt_arqueo_caja_det = new DtArqueoCajaDet();
$monedas = $dt_moneda->get_data();
$denominaciones = $dt_denominacion->get_data();
$detalle = $dt_arqueo_caja_det->find_by_id($id_from_url);
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title - $id_from_url") ?></h1>
    <div class="card mb-4 w-100 p-2">
      <div class="card-body">
        <form action="<?php echo $base_url ?>/negocio/ng_arqueo_caja_det.php" method="POST">
          <input name="parent_id" type="hidden" value="<?php echo $_GET['parent_id'] ?>">
          <input name="id_arqueo_caja" type="hidden" value="<?php echo $_GET['parent_id'] ?>">

          <div class="mb-3">
            <label>ID</label>
            <input name="id_arqueo_caja_det" type="text" readonly class="form-control"
            value="<?php echo $detalle->__GET('id_arqueo_caja_det') ?>" />
          </div>

          <div class="mb-3">
            <label>Moneda</label>
            <select class="form-control" name="id_moneda">
              <?php foreach ($monedas as $moneda) : ?>
                <option 
                <?php echo $detalle->__GET('id_moneda') == $moneda->__GET('id_moneda') ? "selected" : "" ?>
                value="<?php echo $moneda->__GET('id_moneda') ?>">
                  <?php echo ($moneda->__GET('nombre')) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Denominación</label>
            <select class="form-control" name="id_denominacion">
              <?php foreach ($denominaciones as $denominacion) : ?>
                <option 
                <?php echo $detalle->__GET('id_denominacion') == $denominacion->__GET('id_denominacion') ? "selected" : "" ?>
                value="<?php echo $denominacion->__GET('id_denominacion') ?>">
                  <?php echo ($denominacion->__GET('valor_letras')) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Cantidad</label>
            <input class="form-control" step="0.01" type="number" name="cantidad"
            value="<?php echo $detalle->__GET('cantidad')?>">
          </div>

          <div class="mb-3">
            <label>Subtotal</label>
            <input class="form-control" step="0.01" type="number" name="subtotal"
            value="<?php echo $detalle->__GET('subtotal')?>">
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