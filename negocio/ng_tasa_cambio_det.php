<?php

include_once('../entidades/tasa_cambio_det.php');
include_once('../datos/dt_tasa_cambio_det.php');

function insert($dt_tasa_cambio_det) {
  $tasa_cambio_det = new TasaCambioDet();

  foreach($_POST as $key => $value) {
    $tasa_cambio_det->__SET($key, $_POST[$key]);
  }

  $dt_tasa_cambio_det->insert($tasa_cambio_det);

  $alert_msj = new AlertMsj("El detalle fue modificado con éxito", MSJ_PRIMARY);
  $_SESSION["alert_msj"] = $alert_msj;
}

function update($dt_tasa_cambio_det) {
  $tasa_cambio_det = $dt_tasa_cambio_det->find_by_id($_POST['id_tasa_cambio_det']);

  foreach($_POST as $key => $value) {
    $tasa_cambio_det->__SET($key, $_POST[$key]);
  }

  $dt_tasa_cambio_det->update($tasa_cambio_det);

  $alert_msj = new AlertMsj("El detalle fue modificado con éxito", MSJ_PRIMARY);
  $_SESSION["alert_msj"] = $alert_msj;
}
function remove($dt_tasa_cambio_det) {
  $id_tasa_cambio_det = $_POST['id'];
  $dt_tasa_cambio_det->delete_by_id($id_tasa_cambio_det);

  $alert_msj = new AlertMsj("El detalle fue eliminado", MSJ_DANGER);
  $_SESSION["alert_msj"] = $alert_msj;
}
if ($_POST) {
  $dt_tasa_cambio_det = new DtTasaCambioDet();

  $editar = array_key_exists('id_tasa_cambio_det', $_POST) || !empty($_POST['id_tasa_cambio_det']);
  $delete = array_key_exists('delete', $_POST);
  $parent_id = $_POST['parent_id'];
  if ($delete) {
    remove($dt_tasa_cambio_det);
    header("Location: /kermesse-project/tasa_cambio/editar/" . $_GET['parent_id']);
  } else if ($editar) {
    update($dt_tasa_cambio_det);
    header("Location: /kermesse-project/tasa_cambio/editar/$parent_id");
  } else {
    insert($dt_tasa_cambio_det);
    header("Location: /kermesse-project/tasa_cambio/editar/$parent_id");
  }
}
