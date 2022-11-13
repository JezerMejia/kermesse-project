<?php
include('entidades/tasa_cambio_det.php');
$page_title = 'Editar Tasa Cambio Det';
$encabezados = [];
$campo_id = 'id_tasa_cambio_det';
$campos = ['id_tasa_cambio_det'];
$datos = []
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title - $id_from_url") ?></h1>
  
</div>
</main>
<?php include('./partials/_footer.php') ?>
