<?php
include('datos/dt_tasa_cambio.php');
include('datos/dt_moneda.php');
$page_title = 'Tasa Cambio';
$encabezados = ['ID', 'Moneda O', 'Moneda C', 'Mes', 'Año', 'Estado', 'Opciones'];
$campo_id = 'id_tasa_cambio';
$campos = ['id_tasa_cambio', 'moneda_o', 'moneda_c', 'mes', 'anio', 'estado'];

$dt_tc = new DtTasaCambio();
$dt_moneda = new DtMoneda();
$datos = $dt_tc->get_data();

foreach($datos as $dato) {
  $moneda_o = $dt_moneda->find_by_id($dato->__GET('id_moneda_o'));
  $moneda_c = $dt_moneda->find_by_id($dato->__GET('id_moneda_c'));
  $dato->__SET('moneda_o', $moneda_o->__GET('nombre'));
  $dato->__SET('moneda_c', $moneda_c->__GET('nombre'));
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
