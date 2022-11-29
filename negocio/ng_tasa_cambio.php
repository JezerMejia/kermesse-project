<?php

include_once('../entidades/tasa_cambio.php');
include_once('../datos/dt_tasa_cambio.php');

function insert($dt_tasa_cambio) {
  $tasa_cambio = new TasaCambio();

  foreach($_POST as $key => $value) {
    $tasa_cambio->__SET($key, $_POST[$key]);
  }

  $dt_tasa_cambio->insert($tasa_cambio);
  
  $alert_msj = new AlertMsj("La tasa de cambio fue añadida exitosamente", MSJ_SUCCESS);
  $_SESSION["alert_msj"] = $alert_msj;
}

function update($dt_tasa_cambio) {
  $tasa_cambio = $dt_tasa_cambio->find_by_id($_POST['id_tasa_cambio']);

  foreach($_POST as $key => $value) {
    $tasa_cambio->__SET($key, $_POST[$key]);
  }

  $dt_tasa_cambio->update($tasa_cambio);

  $alert_msj = new AlertMsj("La tasa de cambio fue modificada con éxito", MSJ_PRIMARY);
  $_SESSION["alert_msj"] = $alert_msj;
}
function remove($dt_tasa_cambio) {
  $id_tasa_cambio = $_POST['id'];
  $dt_tasa_cambio->delete_by_id($id_tasa_cambio);
  
  $alert_msj = new AlertMsj("La tasa de cambio fue eliminada", MSJ_DANGER);
  $_SESSION["alert_msj"] = $alert_msj;
}
if ($_POST) {
  $dt_tasa_cambio = new DtTasaCambio();

  $editar = array_key_exists('id_tasa_cambio', $_POST) || !empty($_POST['id_tasa_cambio']);
  $delete = array_key_exists('delete', $_POST);
  if ($delete) {
    remove($dt_tasa_cambio);
    header("Location: /kermesse-project/tasa_cambio");
  } else if ($editar) {
    update($dt_tasa_cambio);
    header("Location: /kermesse-project/tasa_cambio");
  } else {
    insert($dt_tasa_cambio);
    header("Location: /kermesse-project/tasa_cambio");
  }
}
