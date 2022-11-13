<?php
include('entidades/rol_opcion.php');
$page_title = 'Rol Opcion';
$encabezados = [];
$campo_id = 'id_rol_opcion';
$campos = ['id_rol_opcion'];
$datos = []
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
