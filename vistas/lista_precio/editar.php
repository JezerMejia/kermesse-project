<?php
include('entidades/lista_precio.php');
$page_title = 'Editar Lista Precio';
$encabezados = [];
$campo_id = 'id_lista_precio';
$campos = ['id_lista_precio'];
$datos = []
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title - $id_from_url") ?></h1>
  
</div>
</main>
<?php include('./partials/_footer.php') ?>
