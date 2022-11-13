<?php
include('entidades/rol.php');
$page_title = 'Roles';
$encabezados = ['ID', 'Descripción', 'Estado'];
$campo_id = 'id_rol';
$campos = ['id_rol', 'descripcion', 'estado'];

$rol1 = new Rol();
$rol1->__SET('id_rol', 1);
$rol1->__SET('descripcion', 'Administrador');
$rol1->__SET('estado', 0);

$rol2 = new Rol();
$rol2->__SET('id_rol', 2);
$rol2->__SET('descripcion', 'Usuario');
$rol2->__SET('estado', 0);

$datos = [$rol1, $rol2];
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
