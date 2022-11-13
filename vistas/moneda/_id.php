<?php
include('entidades/moneda.php');
$page_title = 'Moneda';
$encabezados = [];
$campo_id = 'id_moneda';
$campos = ['id_moneda'];
$datos = []
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title - $id_from_url") ?></h1>
  
</div>
</main>
<?php include('./partials/_footer.php') ?>
