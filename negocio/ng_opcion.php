<?php

include_once ('../entidades/opcion.php');
include_once ('../datos/dt_opcion.php');
include_once('../entidades/alert_msj.php');

session_start();

function insert($dt_opcion) {
  $opcion = new opcion();

  foreach($_POST as $key => $value) {
    $opcion->__SET($key, $_POST[$key]);
  }

  $opcion->__SET('estado', 1);

  $dt_opcion->insert($opcion);

  $alert_msj = new AlertMsj("El producto fue añadido exitosamente", MSJ_SUCCESS);
  $_SESSION["alert_msj"] = $alert_msj;
}

function update($dt_opcion) {
  $opcion = $dt_opcion->find_by_id($_POST['id_opcion']);

  foreach($_POST as $key => $value) {
    $opcion->__SET($key, $_POST[$key]);
  }
  $opcion->__SET('estado', 2);

  $dt_opcion->update($opcion);

  $alert_msj = new AlertMsj("La opcion fue modificada con éxito", MSJ_PRIMARY);
  $_SESSION["alert_msj"] = $alert_msj;
}
function remove($dt_opcion) {
  $opcion = $dt_opcion->find_by_id($_POST['id']);
  $dt_opcion->delete($opcion);

  $alert_msj = new AlertMsj("La opcion fue eliminada", MSJ_DANGER);
  $_SESSION["alert_msj"] = $alert_msj;
}

if ($_POST) {
  $dt_opcion = new DtOpcion();

  $editar = array_key_exists('id_opcion', $_POST) || !empty($_POST['id_opcion']);
  $delete = array_key_exists('delete', $_POST);

  if ($delete) {
    remove($dt_opcion);
    header("Location: /kermesse-project/opcion");
  } else if ($editar) {
    update($dt_opcion);
    header("Location: /kermesse-project/opcion/");
  } else {
    insert($dt_opcion);
    header("Location: /kermesse-project/opcion");
  }
}
