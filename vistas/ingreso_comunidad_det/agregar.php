<?php
include('datos/dt_control_bonos.php');
$page_title = 'Agregar lista precio';
$dt_control_bonos = new DtControlBonos();
$control_bonos = $dt_control_bonos->get_data();
?>
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>

    <div class="card mb-4">
      <div class="card-body">
        En este formulario se agregaran datos a ingreso comunidad.
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-body">
        <!---->
        <form action="<?php echo $base_url ?>/negocio/ng_ingreso_comunidad_det.php" method="POST">

          <input name="parent_id" type="hidden" value="<?php echo $_GET['parent_id'] ?>">
          <input name="id_ingreso_comunidad" type="hidden" value="<?php echo $_GET['parent_id'] ?>">
          <div class="mb-3">
            <label>Control bonos</label>
            <select class="form-control" name="id_bono">
              <?php foreach ($control_bonos as $bono) : ?>
                <option value="<?php echo $bono->__GET('id_bono') ?>">
                  <?php echo ($bono->__GET('nombre')) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1">Denominacion</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" name="denominacion" placeholder="Denominacion" />
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1">Cantidad</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" name="cantidad" placeholder="Cantidad" />
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1">Subtotal del bono</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" name="subtotal_bono" placeholder="Subtotal del bono" />
          </div>

          <div class="mt-4 d-flex gap-3">
            <button class="btn btn-primary" type="submit">Aceptar</button>
            <button class="btn btn-secondary" type="button">Cancelar</button>
          </div>
        </form>
        <!---->
      </div>
    </div>
  </div>
</main>
<?php include('./partials/_footer.php') ?>