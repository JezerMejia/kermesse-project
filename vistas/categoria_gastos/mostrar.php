<?php
include('entidades/categoria_gastos.php');
$page_title = 'Categoria Gastos';
$encabezados = [];
$campo_id = 'id_categoria_gastos';
$campos = ['id_categoria_gastos'];
$datos = []
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
