<?php

include_once('../entidades/arqueo_caja.php');
include_once('../datos/dt_arqueo_caja.php');

function insert($dt_arqueo_caja) {
  $arqueo_caja = new ArqueoCaja();

  foreach($_POST as $key => $value) {
    $arqueo_caja->__SET($key, $_POST[$key]);
  }

  $dt_arqueo_caja->insert($arqueo_caja);
}

function update($dt_arqueo_caja) {
  $arqueo_caja = $dt_arqueo_caja->find_by_id($_POST['id_arqueo_caja']);

  foreach($_POST as $key => $value) {
    $arqueo_caja->__SET($key, $_POST[$key]);
  }

  $dt_arqueo_caja->update($arqueo_caja);
}
function remove($dt_arqueo_caja) {
  $id_arqueo_caja = $_POST['id'];
  $dt_arqueo_caja->delete_by_id($id_arqueo_caja);
}

if ($_POST) {
  $dt_arqueo_caja = new DtArqueoCaja();

  $editar = array_key_exists('id_arqueo_caja', $_POST) || !empty($_POST['id_arqueo_caja']);
  $delete = array_key_exists('delete', $_POST);

  if ($delete) {
    remove($dt_arqueo_caja);
    header("Location: /kermesse-project/arqueo_caja");
  } else if ($editar) {
    update($dt_arqueo_caja);
    header("Location: /kermesse-project/arqueo_caja");
  } else {
    insert($dt_arqueo_caja);
    header("Location: /kermesse-project/arqueo_caja");
  }
}
