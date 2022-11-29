<?php
include('entidades/lista_precio_det.php');
include('datos/dt_lista_precio_det.php');
$page_title = 'Lista Precio Det';
$encabezados = ['ID', 'ID Lista precio','ID Producto','Precio venta','Opciones'];
$campo_id = 'id_lista_precio_det';
$campos = ['id_lista_precio_det','id_lista_precio','id_producto','precio_venta'];
$tabla = "lista_precio_det";

$dt_lista_precio_dt = new DtListaPrecioDet();
$detalles = $dt_lista_precio_dt->get_by_parent_id($id_from_url);
?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table_det.php') ?>
</div>
</main>
