<?php

include_once('../entidades/arqueo_caja.php');
include_once('../datos/dt_arqueo_caja.php');
include_once('../entidades/alert_msj.php');

session_start();

function insert($dt_arqueo_caja) {
  $arqueo_caja = new ArqueoCaja();

  foreach($_POST as $key => $value) {
    $arqueo_caja->__SET($key, $_POST[$key]);
  }

  $dt_arqueo_caja->insert($arqueo_caja);

  $alert_msj = new AlertMsj("El arqueo de caja fue añadido exitosamente", MSJ_SUCCESS);
  $_SESSION["alert_msj"] = $alert_msj;
}

function update($dt_arqueo_caja) {
  $arqueo_caja = $dt_arqueo_caja->find_by_id($_POST['id_arqueo_caja']);

  foreach($_POST as $key => $value) {
    $arqueo_caja->__SET($key, $_POST[$key]);
  }

  $dt_arqueo_caja->update($arqueo_caja);
  
  $alert_msj = new AlertMsj("El arqueo de caja fue modificado con éxito", MSJ_PRIMARY);
  $_SESSION["alert_msj"] = $alert_msj;
}
function remove($dt_arqueo_caja) {
  $arqueo_caja = $dt_arqueo_caja->find_by_id($_POST['id']);
  $dt_arqueo_caja->delete($arqueo_caja);

  $alert_msj = new AlertMsj("El arqueo de caja fue eliminado", MSJ_DANGER);
  $_SESSION["alert_msj"] = $alert_msj;
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
