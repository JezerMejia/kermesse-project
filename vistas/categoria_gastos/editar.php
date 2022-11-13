<?php
include('entidades/categoria_gastos.php');
$page_title = 'Editar Categoria Gastos';
$encabezados = [];
$campo_id = 'id_categoria_gastos';
$campos = ['id_categoria_gastos'];
$datos = []
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title - $id_from_url") ?></h1>
  
</div>
</main>
<?php include('./partials/_footer.php') ?>
