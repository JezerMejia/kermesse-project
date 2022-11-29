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
        En este formulario se visualizan los datos de la denominaciones.
      </div>
    </div>
    <div class="card mb-4">
      <div class="card-body">
        <!---->
        <form>
          <div class="mb-3">
            <label for="exampleFormControlInput1">ID</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" type="id" placeholder="ID"
            value="<?php echo $denominacion->__GET('valor') ?>" disabled />
          </div>

          <div class="mb-3">
          <label>Moneda:</label>
            <select class="form-control" name="id_moneda" disabled>
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
            <label for="exampleFormControlInput1">Valor</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" type="valor" placeholder="Valor"
            value="<?php echo $denominacion->__GET('valor') ?>" disabled />
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1">Valor Letras</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" type="valor" placeholder="Valor Letras"
            value="<?php echo $denominacion->__GET('valor_letras') ?>" disabled />
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1">Estado</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" type="estado" placeholder="Estado" disabled />
          </div>
        </form>
        <!---->
      </div>
    </div>
</main>
<?php include('./partials/_footer.php') ?>