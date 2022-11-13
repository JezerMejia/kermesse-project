<?php
include('entidades/kermesse.php');
$page_title = 'Editar Kermesse';
$encabezados = [];
$campo_id = 'id_kermesse';
$campos = ['id_kermesse'];
$datos = []
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title - $id_from_url") ?></h1>
  
</div>
</main>
<?php include('./partials/_footer.php') ?>
