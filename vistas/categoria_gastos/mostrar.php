<?php
include('entidades/categoria_gastos.php');
$page_title = 'Categoria Gastos';
$encabezados = ['ID', 'Nombre', 'Descripción', 'Estado'];
$campo_id = 'id_categoria_gastos';
$campos = ['id_categoria_gastos', 'nombre_categoria', 'descripcion', 'estado'];

$cat1 = new CategoriaGastos();
$cat1->__SET('id_categoria_gastos', 1);
$cat1->__SET('nombre_categoria', 'Categoría 1');
$cat1->__SET('descripcion', 'Otra categoría');
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
