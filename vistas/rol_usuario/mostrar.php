<?php
include('datos/dt_rol_usuario.php');
include('datos/dt_rol.php');
include('datos/dt_usuario.php');
$page_title = 'Rol Usuario';
$encabezados = ['ID', 'Usuario', 'Rol', 'Opciones'];
$campo_id = 'id_rol_usuario';
$campos = ['id_rol_usuario', 'usuario', 'rol'];

$dt_rol_user = new DtRolUsuario();
$dt_rol = new DtRol();
$dt_user = new DtUsuario();

$datos = $dt_rol_user->get_data();

foreach($datos as $dato) {
  $rol = $dt_rol->find_by_id($dato->__GET('id_rol'));
  $user = $dt_user->find_by_id($dato->__GET('id_usuario'));
  $dato->__SET('rol', $rol->__GET('descripcion'));
  $dato->__SET('usuario', $user->__GET('usuario'));
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
