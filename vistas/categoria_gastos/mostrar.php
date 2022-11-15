<?php
include('datos/dt_categoria_gastos.php');
$page_title = 'Categoria Gastos';
$encabezados = ['ID', 'Nombre', 'Descripción', 'Estado', 'Opciones'];
$campo_id = 'id_categoria_gastos';
$campos = ['id_categoria_gastos', 'nombre_categoria', 'descripcion', 'estado'];

$dt_cat = new DtCategoriaGastos();

$datos = $dt_cat->get_data();
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
