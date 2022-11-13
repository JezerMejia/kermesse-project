<?php
include('entidades/rol_usuario.php');
$page_title = 'Rol Usuario';
$encabezados = ['ID', 'Usuario', 'Rol'];
$campo_id = 'id_rol_usuario';
$campos = ['id_rol_usuario', 'id_usuario', 'id_rol'];

$roluser1 = new RolUsuario();
$roluser1->__SET('id_rol_usuario', 1);
$roluser1->__SET('id_usuario', 1);
$roluser1->__SET('id_rol', 1);

$roluser2 = new RolUsuario();
$roluser2->__SET('id_rol_usuario', 2);
$roluser2->__SET('id_usuario', 2);
$roluser2->__SET('id_rol', 1);

$datos = [$roluser1, $roluser2];
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
