<?php

include_once('../entidades/gasto.php');
include_once('../datos/dt_gasto.php');
include_once('../entidades/alert_msj.php');

session_start();

function insert($dt_gasto) {
  $gasto = new Gasto();

  foreach($_POST as $key => $value) {
    $gasto->__SET($key, $_POST[$key]);
  }

  $dt_gasto->insert($gasto);

  $alert_msj = new AlertMsj("El gasto fue añadido exitosamente", MSJ_SUCCESS);
  $_SESSION["alert_msj"] = $alert_msj;
}

function update($dt_gasto) {
  $gasto = $dt_gasto->find_by_id($_POST['id_gasto']);

  foreach($_POST as $key => $value) {
    $gasto->__SET($key, $_POST[$key]);
  }

  $dt_gasto->update($gasto);

  $alert_msj = new AlertMsj("El gasto fue modificado con exito", MSJ_PRIMARY);
  $_SESSION["alert_msj"] = $alert_msj;
}
function remove($dt_gasto) {
  $id_gasto = $_POST['id'];
  $dt_gasto->delete_by_id($id_gasto);

  $alert_msj = new AlertMsj("El gasto fue eliminado", MSJ_DANGER);
  $_SESSION["alert_msj"] = $alert_msj;
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
