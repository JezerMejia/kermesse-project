<?php
include('entidades/tasa_cambio.php');
$page_title = 'Tasa Cambio';
$encabezados = ['ID', 'Mes', 'Año', 'Opciones'];
$campo_id = 'id_tasa_cambio';
$campos = ['id_tasa_cambio', 'mes', 'anio',];

$tc = new TasaCambio();
$tc->__SET('id_tasa_cambio',1);
$tc->__SET('mes',11);
$tc->__SET('anio',2022);

$tcx = new TasaCambio();
$tcx->__SET('id_tasa_cambio',2);
$tcx->__SET('mes',11);
$tcx->__SET('anio',2022);

$datos = [$tc, $tcx];
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
