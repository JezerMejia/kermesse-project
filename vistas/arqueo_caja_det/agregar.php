<?php
include('entidades/arqueo_caja_det.php');
include('datos/dt_moneda.php');
include('datos/dt_denominacion.php');
$page_title = 'Agregar Arqueo Caja Det';
$dt_moneda = new DtMoneda();
$dt_denominacion = new DtDenominacion();
$monedas = $dt_moneda->get_data();
$denominaciones = $dt_denominacion->get_data();
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
    <div class="card mb-4 w-100 p-2">
      <div class="card-body">
        <form action="<?php echo $base_url ?>/negocio/ng_arqueo_caja_det.php" method="POST">
          <input name="parent_id" type="hidden" value="<?php echo $_GET['parent_id'] ?>">
          <input name="id_arqueo_caja" type="hidden" value="<?php echo $_GET['parent_id'] ?>">
          <div class="mb-3">
            <label>Moneda</label>
            <select class="form-control" name="id_moneda">
              <?php foreach ($monedas as $moneda) : ?>
                <option value="<?php echo $moneda->__GET('id_moneda') ?>">
                  <?php echo ($moneda->__GET('nombre')) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Denominación</label>
            <select class="form-control" name="id_denominacion">
              <?php foreach ($denominaciones as $denominacion) : ?>
                <option value="<?php echo $denominacion->__GET('id_denominacion') ?>">
                  <?php echo ($denominacion->__GET('valor_letras')) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Cantidad</label>
            <input class="form-control" step="0.01" type="number" name="cantidad">
          </div>

          <div class="mb-3">
            <label>Subtotal</label>
            <input class="form-control" step="0.01" type="number" name="subtotal">
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