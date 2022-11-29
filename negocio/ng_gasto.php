<?php

include_once('../entidades/gasto.php');
include_once('../datos/dt_gasto.php');

$dt_gasto = new DtGasto();
$gasto = new Gasto();

if ($_POST) {
  $editar = array_key_exists('id_gasto', $_POST) || !empty($_POST['id_gasto']);

  $gasto->__SET('id_kermesse', $_POST['id_kermesse']);
  $gasto->__SET('id_cat_gastos', $_POST['id_cat_gastos']);
  $gasto->__SET('fecha_gasto', $_POST['fecha_gasto']);
  $gasto->__SET('concepto', $_POST['concepto']);
  $gasto->__SET('monto', $_POST['monto']);

  if ($editar) {
    $gasto->__SET('id_gasto', $_POST['id_gasto']);
    $dt_gasto->update($gasto);
    header("Location: /kermesse-project/gasto/");
  } else {
    $dt_gasto->insert($gasto);
    header("Location: /kermesse-project/gasto");
  }

}
