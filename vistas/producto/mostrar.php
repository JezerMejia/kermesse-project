<?php
include('entidades/producto.php');
include('datos/dt_producto.php');
include('datos/dt_comunidad.php');
include('datos/dt_categoria_productos.php');
$page_title = 'Producto';
$encabezados = ['ID producto','Comunidad','Categoria', 'Nombre', 'Descripcion', 'Cantidad', 'Precio sugerido', 'Estado', 'Opciones'];
$campo_id = 'id_producto';
$campos = ['id_producto','comunidad','categoria', 'nombre', 'descripcion', 'cantidad', 'preciov_sugerido', 'estado'];

$dt_producto = new DtProducto();
$datos = $dt_producto->get_data();

$dt_comunidad = new DtComunidad();
$dt_cat_producto = new DtCategoriaProductos();

foreach($datos as $dato) {
  $comunidad = $dt_comunidad->find_by_id($dato->__GET('id_comunidad'));
  $categoria = $dt_cat_producto->find_by_id($dato->__GET('id_cat_producto'));
  $dato->__SET('comunidad', $comunidad->__GET('nombre'));
  $dato->__SET('categoria', $categoria->__GET('nombre'));
}
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
