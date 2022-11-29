<?php
include('entidades/denominacion.php');
include('datos/dt_denominacion.php');
include('datos/dt_moneda.php');

$dt_denominacion = new DtDenominacion();
$dt_moneda = new DtMoneda();

$denominacion = $dt_denominacion->find_by_id($id_from_url);
$id_moneda = $denominacion->__GET("id_moneda");

$moneda = $dt_moneda->get_data();
$page_title = 'Editar denominacion';
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title - $id_from_url") ?></h1>
    <div class="card mb-4">
      <div class="card-body">
        En este formulario podrá editar los datos dede la denominaciónes.
      </div>
    </div>
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Editar de la denominación
      </div>
      <div class="card-body">
        <form action="<?php echo $base_url ?>/negocio/ng_denominacion.php" method="POST">
          <input type="hidden" value="2" name="txtaccion" id="txtaccion" />
          <div class="mb-3">
            <label>ID:</label>
            <input class="form-control" type="text" name="id_denominacion"
            value="<?php echo $denominacion->__GET('id_denominacion') ?>" readonly required />
          </div>
          <div class="mb-3">
            <label>Moneda:</label>
            <select class="form-control" name="id_moneda">
              <?php foreach ($moneda as $moneda) : ?>
                <?php
                  $mon_id = $moneda->__GET('id_moneda');
                  $mon_name = $moneda->__GET('nombre');
                ?>
                <option value="<?php echo $mon_id?>"
                  <?php echo ($id_moneda == $mon_id) ? "selected" : ""?>>
                  <?php echo ($mon_name) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="mb-3">
            <label>Valor:</label>
            <input class="form-control" type="Text" name="valor"
            value="<?php echo $denominacion->__GET('valor') ?>" required />
          </div>
          <div class="mb-3">
            <label>Valor letras:</label>
            <input class="form-control" type="Text" name="valor_letras"
            value="<?php echo $denominacion->__GET('valor_letras') ?>" required />
          </div>
          
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