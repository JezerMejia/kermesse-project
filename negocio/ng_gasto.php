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
function remove($dt_gasto) {
  $id_gasto = $_POST['id'];
  $dt_gasto->delete_by_id($id_gasto);
}

if ($_POST) {
  $dt_gasto = new DtGasto();

  $editar = array_key_exists('id_gasto', $_POST) || !empty($_POST['id_gasto']);
  $delete = array_key_exists('delete', $_POST);

  if ($delete) {
    remove($dt_gasto);
    header("Location: /kermesse-project/gasto");
  } else if ($editar) {
    update($dt_gasto);
    header("Location: /kermesse-project/gasto/");
  } else {
    insert($dt_gasto);
    header("Location: /kermesse-project/gasto");
  }
}
