<?php
include('entidades/categoria_productos.php');
$page_title = 'Editar Categoria Productos';
$encabezados = [];
$campo_id = 'id_categoria_productos';
$campos = ['id_categoria_productos'];
$datos = []
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title - $id_from_url") ?></h1>
  
</div>
</main>
<?php include('./partials/_footer.php') ?>
