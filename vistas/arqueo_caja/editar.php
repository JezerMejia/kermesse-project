<?php
include('entidades/arqueo_caja.php');
$page_title = 'Editar Arqueo Caja';
$encabezados = [];
$campo_id = 'id_arqueo_caja';
$campos = ['id_arqueo_caja'];
$datos = []
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title - $id_from_url") ?></h1>
  
</div>
</main>
<?php include('./partials/_footer.php') ?>
