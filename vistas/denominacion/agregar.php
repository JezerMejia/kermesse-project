<?php
include('datos/dt_moneda.php');
$page_title = 'Agregar Kermesse';
$dt_moneda = new DtMoneda();
$monedas = $dt_moneda->get_data();
?>
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>

    <div class="card mb-4">
      <div class="card-body">
        En este formulario se agregaran a las denominacion.
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Agregar la denominación
      </div>
      <div class="card-body">
        <form form action="<?php echo $base_url ?>/negocio/ng_denominacion.php" method="POST">
          <input type="hidden" name="usuario_creacion" value="<?php echo $logged_user->__GET('id_usuario'); ?>">
          <input type="hidden" name="fecha_creacion" value="<?php echo $current_date; ?>">
          <div class="mb-3">
            <label>Moneda:</label>
            <select class="form-control" name="id_moneda">
              <?php foreach ($monedas as $moneda) : ?>
                <option value="<?php echo $moneda->__GET('id_moneda') ?>">
                  <?php echo ($moneda->__GET('nombre')) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="mb-3">
            <label>Valor:</label>
            <input class="form-control" type="Text" name="valor" required />
          </div>
          <div class="mb-3">
            <label>Valor letras:</label>
            <input class="form-control" type="text" name="valor_letras" required />
          </div>

          <input name="estado" type="hidden" value="1">

          <input class="form-check-input" id="estado" type="hidden" value="1" name="estado">

          <div class="mt-4 d-flex gap-3">
            <button class="btn btn-primary" type="submit">Aceptar</button>
            <button class="btn btn-secondary" type="button">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
<?php include('./partials/_footer.php') ?>