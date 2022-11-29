<?php
include_once('entidades/usuario.php');
include_once('datos/dt_usuario.php');
$dt_usuario = new DtUsuario();
$page_title = 'Usuario';
$encabezados = ['ID', 'Usuario', 'Nombres', 'Apellidos', 'E-mail', 'Estado', 'Opciones'];
$campo_id = 'id_usuario';
$campos = ['id_usuario', 'usuario', 'nombres', 'apellidos', 'email', 'estado'];

$datos = $dt_usuario->get_data();
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
