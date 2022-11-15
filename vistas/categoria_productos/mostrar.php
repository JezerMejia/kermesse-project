<?php
include('datos/dt_categoria_productos.php');
$page_title = 'Categoría Productos';
$encabezados = ['ID', 'Nombre', 'Descripción', 'Estado', 'Opciones'];
$campo_id = 'id_categoria_producto';
$campos = ['id_categoria_producto', 'nombre', 'descripcion', 'estado'];

$dt_cat = new DtCategoriaProductos();

$datos = $dt_cat->get_data()
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
