<?php
include('entidades/ingreso_comunidad_det.php');
include('datos/dt_ingreso_comunidad_det.php');
$page_title = 'Ingreso Comunidad_det';
$encabezados = ['ID', 'Ingreso comunidad', 'Bono', 'Denominacion', 'Cantidad', 'Subtotal bono','Opciones'];
$campo_id = 'id_ingreso_comunidad_det';
$campos = ['id_ingreso_comunidad_det','id_ingreso_comunidad','id_bono','denominacion','cantidad','subtotal_bono'];
$tabla = "ingreso_comunidad_det";

$dt_ingreso_comunidad_det = new DtIngresoComunidadDet();
$detalles = $dt_ingreso_comunidad_det->get_by_parent_id($id_from_url);
?>

<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table_det.php') ?>
</div>
</main>
