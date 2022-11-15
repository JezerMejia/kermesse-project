<?php
include('datos/dt_kermesse.php');
include('datos/dt_parroquia.php');
$page_title = 'Kermesse';
$encabezados = ['ID', 'Nombre', 'Parroquia', 'Fecha inicio', 'Fecha fin', 'Desrcipción', 'Estado', 'Opciones'];
$campo_id = 'id_kermesse';
$campos = ['id_kermesse', 'nombre', 'parroquia', 'fecha_inicio', 'fecha_final', 'descripcion', 'estado'];

$dt_krm = new DtKermesse();
$dt_parroquia = new DtParroquia();

$datos = $dt_krm->get_data();

foreach($datos as $krm) {
  $parroquia = $dt_parroquia->find_by_id($krm->__GET('id_parroquia'));
  $krm->__SET('parroquia', $parroquia->__GET('nombre'));
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
