<?php
include('entidades/ingreso_comunidad.php');
include('datos/dt_ingreso_comunidad.php');
$page_title = 'Ingreso Comunidad';
$encabezados = ['ID', 'ID Kermesse', 'ID Comunidad', 'ID Producto', 'Cantidad de productos', 'Total Bonos','Estado','Usuario', 'Fecha de creacion',
'Usuario modificación', 'Fecha modificación','Usuario eliminación', 'Fecha eliminacion', 'Opciones'];
$campo_id = 'id_ingreso_comunidad';
$campos = ['id_ingreso_comunidad','id_kermesse','id_comunidad','id_producto','cant_productos','total_bonos','estado','usuario_creacion','fecha_creacion',
'usuario_modificacion','fecha_modificacion','usuario_eliminacion','fecha_eliminacion'];

$ic = new DtIngresoComunidad();
$datos = $ic->get_data();
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
