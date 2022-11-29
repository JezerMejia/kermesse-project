<?php

include_once('../entidades/gasto.php');
include_once('../datos/dt_gasto.php');

function insert($dt_gasto) {
  $gasto = new Gasto();

  foreach($_POST as $key => $value) {
    $gasto->__SET($key, $_POST[$key]);
  }

  $dt_gasto->insert($gasto);
}

function update($dt_gasto) {
  $gasto = $dt_gasto->find_by_id($_POST['id_gasto']);

  foreach($_POST as $key => $value) {
    $gasto->__SET($key, $_POST[$key]);
  }

  $dt_gasto->update($gasto);
}

if ($_POST) {
  $dt_gasto = new DtGasto();

  $editar = array_key_exists('id_gasto', $_POST) || !empty($_POST['id_gasto']);

  if ($editar) {
    update($dt_gasto);
    header("Location: /kermesse-project/gasto/");
  } else {
    insert($dt_gasto);
    header("Location: /kermesse-project/gasto");
  }
}
