<?php
include('entidades/arqueo_caja.php');
$page_title = 'Arqueo Caja';
$encabezados = ['ID', 'Kermesse', 'Fecha', 'Total', 'Estado', 'Opciones'];
$campo_id = 'id_arqueo_caja';
$campos = ['id_arqueo_caja', 'id_kermesse', 'fecha_arqueo', 'gran_total', 'estado'];

$ac = new ArqueoCaja();
$ac->__SET('id_arqueo_caja', 1);
$ac->__SET('id_kermesse', 1);
$ac->__SET('fecha_arqueo', '13/11/2022');
$ac->__SET('gran_total', 20000);
$ac->__SET('estado', 1);

$datos = [$ac, $ac, $ac, $ac];
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
