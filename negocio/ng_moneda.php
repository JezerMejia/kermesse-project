<?php

include_once ('../entidades/moneda.php');
include_once ('../datos/dt_moneda.php');
include_once('../entidades/alert_msj.php');

session_start();

function insert($dt_moneda) {
  $moneda = new moneda();

  foreach($_POST as $key => $value) {
    $moneda->__SET($key, $_POST[$key]);
  }

  $moneda->__SET('estado', 1);

  $dt_moneda->insert($moneda);

  $alert_msj = new AlertMsj("La moneda fue añadida exitosamente", MSJ_SUCCESS);
  $_SESSION["alert_msj"] = $alert_msj;
}

function update($dt_moneda) {
  $moneda = $dt_moneda->find_by_id($_POST['id_moneda']);

  foreach($_POST as $key => $value) {
    $moneda->__SET($key, $_POST[$key]);
  }
  $moneda->__SET('estado', 1);

  $dt_moneda->update($moneda);

  $alert_msj = new AlertMsj("La moneda fue modificado con éxito", MSJ_PRIMARY);
  $_SESSION["alert_msj"] = $alert_msj;
}
function remove($dt_moneda) {
  $moneda = $dt_moneda->find_by_id($_POST['id']);
  $dt_moneda->delete($moneda);

  $alert_msj = new AlertMsj("La moneda fue eliminada", MSJ_DANGER);
  $_SESSION["alert_msj"] = $alert_msj;
}

if ($_POST) {
  $dt_moneda = new DtMoneda();

  $editar = array_key_exists('id_moneda', $_POST) || !empty($_POST['id_moneda']);
  $delete = array_key_exists('delete', $_POST);

  if ($delete) {
    remove($dt_moneda);
    header("Location: /kermesse-project/moneda");
  } else if ($editar) {
    update($dt_moneda);
    header("Location: /kermesse-project/moneda/");
  } else {
    insert($dt_moneda);
    header("Location: /kermesse-project/moneda");
  }
}
