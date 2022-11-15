<?php
include('entidades/arqueo_caja_det.php');
include('datos/dt_arqueo_caja_det.php');
$page_title = 'Arqueo Caja Det';
$encabezados = ['ID', 'ID Arqueo caja', 'ID Moneda', 'Cantidad', 'Subtotal', 'Opciones'];
$campo_id = 'id_arqueo_caja_det';
// $campos = ['id_arqueo_caja_det', '_arqueo_caja', 'id_moneda', 'id_denominacion', 'cantidad', 'subtotal'];
$campos = ['id_arqueo_caja_det', 'id_arqueo_caja', 'id_moneda', 'cantidad', 'subtotal'];

$acd = new DtArqueoCajaDet();

$datos = $acd->get_data();
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
