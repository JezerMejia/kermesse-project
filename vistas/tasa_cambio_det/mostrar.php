<?php
$encabezados = ['ID', 'Fecha', 'Tipo de cambio', 'Opciones'];
$campo_id = 'id_tasa_cambio_det';
$campos = ['id_tasa_cambio_det', 'fecha', 'tipo_cambio'];
$tabla = "tasa_cambio_det";

if($mostrar) {
  array_pop($encabezados);
}

$dt_tasa_cambio_det = new DtTasaCambioDet();

$detalles = $dt_tasa_cambio_det->get_by_parent_id($id_from_url);
?>

<?php include('./partials/_table_det.php') ?>

