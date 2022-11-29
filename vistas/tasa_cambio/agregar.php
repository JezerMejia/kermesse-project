<?php
include('datos/dt_moneda.php');
$page_title = 'Agregar Tasa Cambio';
$dt_moneda = new DtMoneda();
$monedas = $dt_moneda->get_data();
$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
    <div class="card mb-4 w-100 p-2">
      <div class="card-body">
        <form action="<?php echo $base_url ?>/negocio/ng_tasa_cambio.php" method="POST">
          <input name="estado" type="hidden" value="1">

          <div class="mb-3">
            <label>Moneda O</label>
            <select class="form-control" name="id_moneda_o">
              <?php foreach ($monedas as $moneda) : ?>
                <option value="<?php echo $moneda->__GET('id_moneda') ?>">
                  <?php echo ($moneda->__GET('nombre')) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Moneda C</label>
            <select class="form-control" name="id_moneda_c">
              <?php foreach ($monedas as $moneda) : ?>
                <option value="<?php echo $moneda->__GET('id_moneda') ?>">
                  <?php echo ($moneda->__GET('nombre')) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Mes</label>
            <select class="form-control" name="mes">
              <?php foreach ($meses as $mes) : ?>
                <option value="<?php echo ($mes) ?>">
                  <?php echo ($mes) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Año</label>
            <input class="form-control" type="number" step="1" min="1900" value="2022" name="anio">
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