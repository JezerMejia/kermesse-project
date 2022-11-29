<?php
include('entidades/gasto.php');
include('datos/dt_gasto.php');
include('datos/dt_categoria_gastos.php');
include('datos/dt_kermesse.php');

$dt_gasto = new DtGasto();
$dt_kermesse = new DtKermesse();
$dt_cat_gasto = new DtCategoriaGastos();


$gasto = $dt_gasto->find_by_id($id_from_url);
$id_kermesse = $gasto->__GET("id_kermesse");
$id_categoria = $gasto->__GET("id_cat_gastos");

$kermesses = $dt_kermesse->get_data();
$categorias = $dt_cat_gasto->get_data();

$page_title = 'Editar Gasto';
$current_date = new DateTime()->format('Y-m-d H:i:s');
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
    <div class="card mb-4 w-100 p-2">
      <div class="card-body">
      <form action="<?php echo $base_url?>/negocio/ng_gasto.php" method="POST">
          <input type="hidden" name="usuario_modificacion"
          value="<?php echo $logged_user->__GET('id_usuario'); ?>">
          <input type="hidden" name="fecha_modificacion"
          value="<?php echo $current_date; ?>">

          <div class="mb-3">
            <label>ID</label>
            <input class="form-control" readonly type="number" name="id_gasto"
            value="<?php echo $gasto->__GET('id_gasto')?>"/>
          </div>

          <div class="mb-3">
            <label>Kermesse</label>
            <select class="form-control" name="id_kermesse">
              <?php foreach ($kermesses as $kermesse) : ?>
                <?php
                  $ker_id = $kermesse->__GET('id_kermesse');
                  $ker_name = $kermesse->__GET('nombre');
                ?>
                <option value="<?php echo $ker_id?>"
                  <?php echo ($id_kermesse == $ker_id) ? "selected" : ""?>>
                  <?php echo ($ker_name) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Categoría</label>
            <select class="form-control" name="id_cat_gastos">
              <?php foreach ($categorias as $categoria) : ?>
                <?php
                  $cat_id = $categoria->__GET('id_categoria_gastos');
                  $cat_desc = $categoria->__GET('descripcion');
                ?>
                <option value="<?php echo $cat_id ?>"
                  <?php echo ($id_categoria == $cat_id) ? "selected" : ""?>>
                  <?php echo $cat_desc ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Fecha Gasto</label>
            <input class="form-control" type="date" name="fecha_gasto"
              value="<?php echo $gasto->__GET('fecha_gasto')?>">
          </div>

          <div class="mb-3">
            <label>Concepto</label>
            <input class="form-control" type="text" name="concepto"
              value="<?php echo $gasto->__GET('concepto')?>">
          </div>

          <div class="mb-3">
            <label>Monto</label>
            <input class="form-control" type="number" name="monto"
              value="<?php echo $gasto->__GET('monto')?>">
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
