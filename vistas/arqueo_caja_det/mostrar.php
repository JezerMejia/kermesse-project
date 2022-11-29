<?php
include_once('datos/dt_moneda.php');
include_once('datos/dt_denominacion.php');

$page_title = 'Arqueo Caja Det';
$encabezados = ['ID', 'Moneda', 'Denominación', 'Cantidad', 'Subtotal', 'Opciones'];
$campo_id = 'id_arqueo_caja_det';
$campos = ['id_arqueo_caja_det', 'moneda', 'denominacion', 'cantidad', 'subtotal'];
$tabla = "arqueo_caja_det";

$dt_arqueo_caja_det = new DtArqueoCajaDet();
$dt_moneda = new DtMoneda();
$dt_denominacion = new DtDenominacion();

$detalles = $dt_arqueo_caja_det->get_by_parent_id($id_from_url);

foreach($detalles as $det) {
  $moneda = $dt_moneda->find_by_id($det->__GET('id_moneda'));
  $denominacion = $dt_denominacion->find_by_id($det->__GET('id_denominacion'));
  $det->__SET('moneda', $moneda->__GET('nombre'));
  $det->__SET('denominacion', $denominacion->__GET('valor_letras'));
}
?>

<?php include('./partials/_table_det.php') ?>
