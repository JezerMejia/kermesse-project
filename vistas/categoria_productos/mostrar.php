<?php
include('entidades/categoria_productos.php');
$page_title = 'Categoría Productos';
$encabezados = ['ID', 'Nombre', 'Descripción', 'estado'];
$campo_id = 'id_categoria_producto';
$campos = ['id_categoria_producto', 'nombre', 'descripcion', 'estado'];

$cat1 = new CategoriaProductos();
$cat1->__SET('id_categoria_producto', 1);
$cat1->__SET('nombre', 'Herramientas');
$cat1->__SET('descripcion', 'Herramientas varias');
$cat1->__SET('estado', 0);

$datos = [$cat1]
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
