<?php
include('datos/dt_gasto.php');
include('datos/dt_kermesse.php');
include('datos/dt_categoria_gastos.php');
$page_title = 'Gastos';
$encabezados = ['ID', 'Concepto', 'Monto', 'Fecha', 'Estado', 'Kermesse', 'Categoría', 'Opciones'];
$campo_id = 'id_gasto';
$campos = ['id_gasto', 'concepto', 'monto', 'fecha_gasto', 'estado', 'kermesse', 'cat_gastos'];

$dt_gasto = new DtGasto();
$dt_kermesse = new DtKermesse();
$dt_categoria_gastos = new DtCategoriaGastos();
$datos = $dt_gasto->get_data();

foreach ($datos as $dato) {
  $ker = $dt_kermesse->find_by_id($dato->__GET('id_kermesse'));
  $cat_gasto = $dt_categoria_gastos->find_by_id($dato->__GET('id_cat_gastos'));
  $dato->__SET('kermesse', $ker->__GET('nombre'));
  $dato->__SET('cat_gastos', $cat_gasto->__GET('nombre_categoria'));
}

?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
