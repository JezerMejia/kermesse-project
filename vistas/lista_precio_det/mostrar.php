<?php
include('entidades/lista_precio_det.php');
$page_title = 'Lista Precio Det';
$encabezados = ['ID', 'ID Lista precio','ID Producto','Precio venta','Opciones'];
$campo_id = 'id_lista_precio_det';
$campos = ['id_lista_precio_det','id_lista_precio','id_producto','precio_venta'];

$lpd = new ListaPrecioDet();
$lpd-> __SET('id_lista_precio_det',1);
$lpd-> __SET('id_lista_precio',1);
$lpd-> __SET('id_producto',1);
$lpd-> __SET('precio_venta',200);

$datos = [$lpd]
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
