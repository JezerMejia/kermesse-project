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

$kermesse = $dt_kermesse->find_by_id($id_kermesse);
$categoria = $dt_cat_gasto->find_by_id($id_categoria);

$page_title = 'Gasto';
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
    <div class="card mb-4 w-100 p-2">
      <div class="card-body">
      <form>
          <div class="mb-3">
            <label>ID</label>
            <input class="form-control" readonly type="number" name="id_gasto"
              value="<?php echo $gasto->__GET('id_gasto')?>"/>
          </div>

          <div class="mb-3">
            <label>Kermesse</label>
            <input class="form-control" readonly type="text" name="id_kermesse"
              value="<?php echo $kermesse->__GET('nombre')?>"/>
          </div>

          <div class="mb-3">
            <label>Categoría</label>
            <input class="form-control" readonly type="text" name="id_cat_gastos"
              value="<?php echo $categoria->__GET('descripcion')?>"/>
          </div>

          <div class="mb-3">
            <label>Fecha Gasto</label>
            <input class="form-control" readonly type="date" name="fecha_gasto"
              value="<?php echo $gasto->__GET('fecha_gasto')?>">
          </div>

          <div class="mb-3">
            <label>Concepto</label>
            <input class="form-control" readonly type="text" name="concepto"
              value="<?php echo $gasto->__GET('concepto')?>">
          </div>

          <div class="mb-3">
            <label>Monto</label>
            <input class="form-control" readonly type="number" name="monto"
              value="<?php echo $gasto->__GET('monto')?>">
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
<?php include('./partials/_footer.php') ?>
