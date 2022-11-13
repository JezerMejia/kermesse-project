<?php
include('entidades/comunidad.php');
$page_title = 'Comunidad';
$encabezados = [];
$campo_id = 'id_comunidad';
$campos = ['id_comunidad'];
$datos = []
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title - $id_from_url") ?></h1>
  
</div>
</main>
<?php include('./partials/_footer.php') ?>
