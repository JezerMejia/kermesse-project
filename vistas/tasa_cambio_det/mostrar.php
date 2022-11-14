<?php
include('entidades/tasa_cambio_det.php');
$page_title = 'Tasa Cambio Det';
$encabezados = ['ID', 'ID Tasa cambio', 'Fecha', 'Tipo de cambio', 'Opciones'];
$campo_id = 'id_tasa_cambio_det';
$campos = ['id_tasa_cambio_det', 'id_tasa_cambio','fecha', 'tipo_cambio'];

$tcd = new TasaCambioDet();
$tcd->__SET($campo_id, 1);
$tcd->__SET('id_tasa_cambio', 1);
$tcd->__SET('fecha', '13/11/2022');
$tcd->__SET('tipo_cambio', 35.945);
$tcd2 = new TasaCambioDet();
$tcd2->__SET($campo_id, 2);
$tcd2->__SET('id_tasa_cambio', 1);
$tcd2->__SET('fecha', '13/11/2022');
$tcd2->__SET('tipo_cambio', 36.003);
$datos = [$tcd, $tcd2];
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
