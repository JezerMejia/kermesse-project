<?php
include('datos/dt_rol.php');
$page_title = 'Roles';
$encabezados = ['ID', 'Descripción', 'Estado', 'Opciones'];
$campo_id = 'id_rol';
$campos = ['id_rol', 'descripcion', 'estado'];

$dt_rol = new DtRol();
$datos = $dt_rol->get_data()
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
