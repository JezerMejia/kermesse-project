<?php
include('entidades/ingreso_comunidad_det.php');
$page_title = 'Ingreso Comunidad Det';
$encabezados = [];
$campo_id = 'id_ingreso_comunidad_det';
$campos = ['id_ingreso_comunidad_det'];
$datos = []
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
