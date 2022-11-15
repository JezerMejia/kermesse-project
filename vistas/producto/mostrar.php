<?php
include('entidades/producto.php');
include('datos/dt_producto.php');
$page_title = 'Producto';
$encabezados = ['ID producto','ID Comunidad','ID Cantidad Producto', 'Nombre', 'Descripcion', 'Cantidad', 'Precio sugerido', 'Estado', 'Opciones'];
$campo_id = 'id_producto';
$campos = ['id_producto','id_comunidad','id_cat_producto', 'nombre', 'descripcion', 'cantidad', 'preciov_sugerido', 'estado'];

$dt_producto = new DtProducto();
$datos = $dt_producto->get_data()
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
