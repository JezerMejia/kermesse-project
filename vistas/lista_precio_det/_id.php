<?php
include('entidades/lista_precio_det.php');
$page_title = 'Lista Precio Det';
$encabezados = [];
$campo_id = 'id_lista_precio_det';
$campos = ['id_lista_precio_det'];
$datos = []
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title - $id_from_url") ?></h1>
  
</div>
</main>
<?php include('./partials/_footer.php') ?>
