<?php
include_once('entidades/rol_opcion.php');
include_once('datos/dt_rol_opcion.php');
include_once('datos/dt_rol.php');
include_once('datos/dt_opcion.php');
$page_title = 'Rol Opcion';
$encabezados = ['ID Rol Opcion','Rol', 'Opcion', 'Opciones'];
$campo_id = 'id_rol_opcion';
$campos = ['id_rol_opcion','rol','opcion'];

$dt_rol_opcion = new DtRolOpcion();
$datos = $dt_rol_opcion->get_data();

$dt_rol = new DtRol();
$dt_opcion = new DtOpcion();

foreach($datos as $dato) {
  $rol = $dt_rol->find_by_id($dato->__GET('id_rol'));
  $opcion = $dt_opcion->find_by_id($dato->__GET('id_opcion'));
  $dato->__SET('rol', $rol->__GET('descripcion'));
  $dato->__SET('opcion', $opcion->__GET('descripcion'));
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

