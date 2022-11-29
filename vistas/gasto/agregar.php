<?php
include('datos/dt_categoria_gastos.php');
include('datos/dt_kermesse.php');
$page_title = 'Agregar Gasto';
$dt_kermesse = new DtKermesse();
$dt_cat_gasto = new DtCategoriaGastos();
$kermesses = $dt_kermesse->get_data();
$categorias = $dt_cat_gasto->get_data();

$now = new DateTime();
$current_date = $now->format("Y-m-d H:i:s");
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
    <div class="card mb-4 w-100 p-2">
      <div class="card-body">
      <form action="<?php echo $base_url?>/negocio/ng_gasto.php" method="POST">
          <input type="hidden" name="usuario_creacion"
          value="<?php echo $logged_user->__GET('id_usuario'); ?>">
          <input type="hidden" name="fecha_creacion"
          value="<?php echo $current_date; ?>">

          <div class="mb-3">
            <label>Kermesse</label>
            <select class="form-control" name="id_kermesse">
              <?php foreach ($kermesses as $kermesse) : ?>
                <option value="<?php echo $kermesse->__GET('id_kermesse')?>">
                  <?php echo ($kermesse->__GET('nombre')) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Categoría</label>
            <select class="form-control" name="id_cat_gastos">
              <?php foreach ($categorias as $categoria) : ?>
                <option value="<?php echo $categoria->__GET('id_categoria_gastos')?>">
                  <?php echo ($categoria->__GET('descripcion')) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Fecha Gasto</label>
            <input class="form-control" type="date" name="fecha_gasto">
          </div>

          <div class="mb-3">
            <label>Concepto</label>
            <input class="form-control" type="text" name="concepto">
          </div>

          <div class="mb-3">
            <label>Monto</label>
            <input class="form-control" type="number" name="monto">
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
