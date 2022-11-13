<?php
include('entidades/rol_opcion.php');
$page_title = 'Rol Opcion';
$encabezados = ['ID Rol Opcion', 'ID Rol', 'ID Opcion'];
$campo_id = 'id_rol_opcion';
$campos = ['id_rol_opcion', 'id_rol', 'id_opcion'];

$tc = new RolOpcion();
$tc->__SET('id_rol_opcion',1);
$tc->__SET('id_rol',1);
$tc->__SET('id_opcion',1);

$tcx = new RolOpcion();
$tcx->__SET('id_rol_opcion',2);
$tcx->__SET('id_rol',2);
$tcx->__SET('id_opcion',2);

$datos = [$tc, $tcx];
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
