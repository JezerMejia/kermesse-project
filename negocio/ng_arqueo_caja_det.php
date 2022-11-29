<?php

include_once('../entidades/arqueo_caja_det.php');
include_once('../datos/dt_arqueo_caja_det.php');

function insert($dt_arqueo_caja_det) {
  $arqueo_caja_det = new ArqueoCajaDet();

  foreach($_POST as $key => $value) {
    $arqueo_caja_det->__SET($key, $_POST[$key]);
  }

  $dt_arqueo_caja_det->insert($arqueo_caja_det);
}

function update($dt_arqueo_caja_det) {
  $arqueo_caja_det = $dt_arqueo_caja_det->find_by_id($_POST['id_arqueo_caja_det']);

  foreach($_POST as $key => $value) {
    $arqueo_caja_det->__SET($key, $_POST[$key]);
  }

  $dt_arqueo_caja_det->update($arqueo_caja_det);
}
function remove($dt_arqueo_caja_det) {
  $id_arqueo_caja_det = $_POST['id'];
  $dt_arqueo_caja_det->delete_by_id($id_arqueo_caja_det);
}
if ($_POST) {
  $dt_arqueo_caja_det = new DtArqueoCajaDet();

  $editar = array_key_exists('id_arqueo_caja_det', $_POST) || !empty($_POST['id_arqueo_caja_det']);
  $delete = array_key_exists('delete', $_POST);
  $parent_id = $_POST['parent_id'];
  echo $delete;
  if ($delete) {
    remove($dt_arqueo_caja_det);
    header("Location: /kermesse-project/arqueo_caja/editar/" . $_GET['parent_id']);
  } else if ($editar) {
    update($dt_arqueo_caja_det);
    header("Location: /kermesse-project/arqueo_caja/editar/$parent_id");
  } else {
    insert($dt_arqueo_caja_det);
    header("Location: /kermesse-project/arqueo_caja/editar/$parent_id");
  }
}
