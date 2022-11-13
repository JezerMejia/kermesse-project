<?php
include('entidades/gasto.php');
$page_title = 'Editar Gasto';
$encabezados = [];
$campo_id = 'id_gasto';
$campos = ['id_gasto'];
$datos = []
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title - $id_from_url") ?></h1>
  
</div>
</main>
<?php include('./partials/_footer.php') ?>
