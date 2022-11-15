<?php
include('entidades/arqueo_caja.php');
include('datos/dt_arqueo_caja.php');
include('datos/dt_kermesse.php');
$page_title = 'Arqueo Caja';
$encabezados = ['ID', 'Kermesse', 'Fecha', 'Total', 'Estado', 'Opciones'];
$campo_id = 'id_arqueo_caja';
$campos = ['id_arqueo_caja', 'kermesse', 'fecha_arqueo', 'gran_total', 'estado'];

$dt_arqueo_caja = new DtArqueoCaja();
$dt_kermesse = new DtKermesse();
$datos = $dt_arqueo_caja->get_data();
foreach($datos as $dato) {
  $ker = $dt_kermesse->find_by_id($dato->__GET('id_kermesse'));
  $dato->__SET('kermesse', $ker->__GET('nombre'));
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
