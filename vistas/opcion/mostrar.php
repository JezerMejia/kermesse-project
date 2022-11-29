<?php
include_once('entidades/opcion.php');
include_once('datos/dt_opcion.php');
$page_title = 'Opcion';
$encabezados = ['ID', 'Descripcion', 'Estado','Opciones'];
$campo_id = 'id_opcion';
$campos = ['id_opcion','descripcion', 'estado'];

$dt_opcion = new DtOpcion();
$datos = $dt_opcion->get_data()
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
