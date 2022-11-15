<?php
include('entidades/rol_opcion.php');
include('datos/dt_rol_opcion.php');
$page_title = 'Rol Opcion';
$encabezados = ['ID Rol Opcion', 'ID Rol', 'ID Opcion', 'Opciones'];
$campo_id = 'id_rol_opcion';
$campos = ['id_rol_opcion', 'id_rol', 'id_opcion'];

$dt_rol_opcion = new DtRolOpcion();
$datos = $dt_rol_opcion->get_data()
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
