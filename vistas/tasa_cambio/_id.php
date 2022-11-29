<?php
include_once('datos/dt_tasa_cambio.php');
include_once('datos/dt_tasa_cambio_det.php');
include_once('datos/dt_moneda.php');
$page_title = 'Editar Tasa Cambio';
$dt_tasa_cambio = new DtTasaCambio();
$tasa_cambio = $dt_tasa_cambio->find_by_id($id_from_url);
var_dump($tasa_cambio);
$dt_moneda = new DtMoneda();
$monedas = $dt_moneda->get_data();
$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
$mostrar = true;
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title - $id_from_url") ?></h1>
    <div class="card mb-4 w-100 p-2">
      <div class="card-body">
        <form action="<?php echo $base_url ?>/negocio/ng_tasa_cambio.php" method="POST">

          <input name="usuario_modificacion" type="hidden" value="<?php echo $logged_user->__GET('id_usuario') ?>">
          <input name="fecha_modificacion" type="hidden" value="<?php echo date('Y-m-d') ?>">
          <input name="estado" type="hidden" value="2">

          <div class="mb-3">
            <label>ID</label>
            <input name="id_tasa_cambio" type="text" readonly class="form-control"
            value="<?php echo $tasa_cambio->__GET('id_tasa_cambio') ?>" />
          </div>

          <div class="mb-3">
            <label>Moneda O</label>
            <select class="form-control" name="id_moneda_o" readonly>
              <?php foreach ($monedas as $moneda) : ?>
                <option <?php echo $tasa_cambio->__GET('id_moneda_o') == $moneda->__GET('id_moneda') ? "selected" : "disabled" ?> 
                value="<?php echo $moneda->__GET('id_moneda') ?>">
                  <?php echo ($moneda->__GET('nombre')) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Moneda C</label>
            <select class="form-control" name="id_moneda_c" readonly>
              <?php foreach ($monedas as $moneda) : ?>
                <option <?php echo $tasa_cambio->__GET('id_moneda_c') == $moneda->__GET('id_moneda') ? "selected" : "disabled" ?>
                 value="<?php echo $moneda->__GET('id_moneda') ?>">
                  <?php echo ($moneda->__GET('nombre')) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Mes</label>
            <select class="form-control" name="mes" readonly>
              <?php foreach ($meses as $mes) : ?>
                <option 
                <?php echo $tasa_cambio->__GET('mes') == $mes ? "selected" : "disabled" ?>
                value="<?php echo ($mes) ?>">
                  <?php echo ($mes) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Año</label>
            <input class="form-control" type="number" step="1" min="1900" value="<?php echo $tasa_cambio->__GET('anio') ?>" name="anio" readonly>
          </div>
        </form>
      </div>
    </div>
    <h2>Detalles</h2>
    <?php include_once 'vistas/tasa_cambio_det/mostrar.php' ?>
  </div>
</main>
<?php include('./partials/_footer.php') ?>