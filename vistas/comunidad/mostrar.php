<?php
include('datos/dt_comunidad.php');
$page_title = 'Comunidad';
$encabezados = ['ID', 'Nombre', 'Responsable', 'Contribución', 'Estado', 'Opciones'];
$campo_id = 'id_comunidad';
$campos = ['id_comunidad', 'nombre', 'responsable','desc_contribucion','estado'];

$dt_comunidad = new DtComunidad();
$datos = $dt_comunidad->get_data()
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
