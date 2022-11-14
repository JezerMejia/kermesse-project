<?php
include('entidades/usuario.php');
$page_title = 'Usuario';
$encabezados = ['ID', 'Usuario', 'Nombres', 'Apellidos', 'E-mail', 'Estado', 'Opciones'];
$campo_id = 'id_usuario';
$campos = ['id_usuario', 'usuario', 'nombres', 'apellidos', 'email', 'estado'];

$user1 = new Usuario();
$user1->__SET('id_usuario', 1);
$user1->__SET('usuario', 'ameza');
$user1->__SET('nombres', 'Armando Alexander');
$user1->__SET('apellidos', 'Meza López');
$user1->__SET('email', 'ameza@enigma.com');
$user1->__SET('estado', 1);

$user2 = new Usuario();
$user2->__SET('id_usuario', 2);
$user2->__SET('usuario', 'jezerm');
$user2->__SET('nombres', 'Jezer');
$user2->__SET('apellidos', 'Mejía');
$user2->__SET('email', 'jezerm@enigma.com');
$user2->__SET('estado', 1);

$datos = [$user1, $user2];
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
