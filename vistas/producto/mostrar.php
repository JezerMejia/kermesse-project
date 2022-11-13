<?php
include('entidades/producto.php');
$page_title = 'Producto';
$encabezados = ['ID producto','ID Comunidad','ID Cantidad Producto', 'Nombre', 'Descripcion', 'Cantidad', 'Precio sugerido', 'Estado'];
$campo_id = 'id_producto';
$campos = ['id_producto','id_comunidad','id_cat_producto', 'nombre', 'descripcion', 'cantidad', 'preciov_sugerido', 'estado'];

$tc = new Producto();
$tc->__SET('id_producto',1);
$tc->__SET('id_comunidad',1);
$tc->__SET('id_cat_producto',1);
$tc->__SET('nombre', "Nacatamales");
$tc->__SET('descripcion', "Comida nacional");
$tc->__SET('cantidad',50);
$tc->__SET('preciov_sugerido', "50 cordobas cada uno");
$tc->__SET('estado',1);

$tcx = new Producto();
$tcx->__SET('id_producto',2);
$tcx->__SET('id_comunidad',2);
$tcx->__SET('id_cat_producto',2);
$tcx->__SET('nombre', "Chicharron");
$tcx->__SET('descripcion', "Piel del cerdo");
$tcx->__SET('cantidad',20);
$tcx->__SET('preciov_sugerido', "140 Cordobas la libra");
$tcx->__SET('estado',1);

$datos = [$tc, $tcx]
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
