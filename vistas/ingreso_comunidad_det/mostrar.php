<?php
include('entidades/ingreso_comunidad_det.php');
$page_title = 'Ingreso Comunidad Det';
$encabezados = ['ID','ID Ingreso de comunidad','ID Bono','Denominacion','Cantidad','Subtotal del bono','Opciones'];
$campo_id = 'id_ingreso_comunidad_det';
$campos = ['id_ingreso_comunidad_det','id_iDngreso_comunidad','id_bono','denominacion','cantidad','subtotal_bono'];

$icd = new IngresoComunidadDet();
$icd->__SET('id_ingreso_comunidad_det',1);
$icd->__SET('id_ingreso_comunidad',1);
$icd->__SET('id_bono',1);
$icd->__SET('denominacion',1);
$icd->__SET('cantidad',1);
$icd->__SET('subtotal_bono',"Pedro");

$datos = [$icd]
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
