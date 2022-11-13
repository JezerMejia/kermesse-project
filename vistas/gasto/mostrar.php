<?php
include('entidades/gasto.php');
$page_title = 'Gastos';
$encabezados = ['ID', 'Concepto', 'Monto', 'Fecha', 'Estado', 'Kermesse', 'Categoría'];
$campo_id = 'id_gasto';
$campos = ['id_gasto', 'concepto', 'monto', 'fecha_gasto', 'estado', 'id_kermesse', 'id_cat_gastos'];

$gasto1 = new Gasto();
$gasto1->__SET('id_gasto', 1);
$gasto1->__SET('id_kermesse', 1);
$gasto1->__SET('id_cat_gastos', 1);
$gasto1->__SET('fecha_gasto', '2022-11-13');
$gasto1->__SET('concepto', 'Compra de un lápiz');
$gasto1->__SET('monto', 15.99);
$gasto1->__SET('estado', 0);

$gasto2 = new Gasto();
$gasto2->__SET('id_gasto', 2);
$gasto2->__SET('id_kermesse', 1);
$gasto2->__SET('id_cat_gastos', 2);
$gasto2->__SET('fecha_gasto', '2022-11-13');
$gasto2->__SET('concepto', 'Compra de un borrador');
$gasto2->__SET('monto', 20.15);
$gasto2->__SET('estado', 0);

$datos = [$gasto1, $gasto2]
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
