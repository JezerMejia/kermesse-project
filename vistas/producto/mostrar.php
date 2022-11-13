<?php
include('entidades/producto.php');
$page_title = 'Producto';
$encabezados = [];
$campo_id = 'id_producto';
$campos = ['id_producto'];
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
