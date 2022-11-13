<?php
include('entidades/rol.php');
$page_title = 'Rol';
$encabezados = [];
$campo_id = 'id_rol';
$campos = ['id_rol'];
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
