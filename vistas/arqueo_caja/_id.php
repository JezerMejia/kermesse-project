<?php
include_once('datos/dt_arqueo_caja.php');
include_once('datos/dt_arqueo_caja_det.php');
include_once('datos/dt_kermesse.php');
$page_title = 'Arqueo Caja';
$dt_kermesse = new DtKermesse();
$dt_arqueo_caja = new DtArqueoCaja();
$arqueo = $dt_arqueo_caja->find_by_id($id_from_url);
$kermesses = $dt_kermesse->get_data();
$mostrar = true;
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title - $id_from_url") ?></h1>
    <div class="card mb-4 w-100 p-2">
      <div class="card-body">
        <form action="<?php echo $base_url ?>/negocio/ng_arqueo_caja.php" method="POST">
          <input name="estado" type="hidden" value="2">
          <input name="usuario_modificacion" type="hidden" value="<?php echo $logged_user->__GET('id_usuario') ?>">
          <input name="fecha_modificacion" type="hidden" value="<?php echo date('Y-m-d') ?>">

          <div class="mb-3">
            <label>ID</label>
            <input name="id_arqueo_caja" type="text" readonly class="form-control" value="<?php echo $arqueo->__GET('id_arqueo_caja') ?>" />
          </div>

          <div class="mb-3">
            <label>Kermesse</label>
            <select class="form-control" name="id_kermesse" readonly>
              <?php foreach ($kermesses as $kermesse) : ?>
                <option 
                <?php echo $kermesse->__GET('id_kermesse') == $arqueo->__GET('id_kermesse') ? "selected" : "disabled" ?>
                value="<?php echo $kermesse->__GET('id_kermesse') ?>"
                >
                  <?php echo ($kermesse->__GET('nombre')) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Fecha</label>
            <input class="form-control" type="date" name="fecha_arqueo" value="<?php echo $arqueo->__GET('fecha_arqueo') ?>" readonly>
          </div>

          <div class="mb-3">
            <label>Gran total</label>
            <input class="form-control" type="number" name="gran_total" step="0.0001" value="<?php echo $arqueo->__GET('gran_total') ?>" readonly>
          </div>
        </form>
      </div>
    </div>
    <h2>Detalles</h2>
    <?php include_once 'vistas/arqueo_caja_det/mostrar.php' ?>
  </div>
</main>
<?php include('./partials/_footer.php') ?>