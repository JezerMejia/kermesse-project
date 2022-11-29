<?php

include_once('../entidades/kermesse.php');
include_once('../datos/dt_kermesse.php');
include_once('../entidades/alert_msj.php');

session_start();

function insert($dt_kermesse) {
  $kermesse = new Kermesse();

  foreach($_POST as $key => $value) {
    $kermesse->__SET($key, $_POST[$key]);
  }

  $dt_kermesse->insert($kermesse);

  $alert_msj = new AlertMsj("La Kermesse fue añadida exitosamente", MSJ_SUCCESS);
  $_SESSION["alert_msj"] = $alert_msj;
}

function update($dt_kermesse) {
  $kermesse = $dt_kermesse->find_by_id($_POST['id_kermesse']);

  foreach($_POST as $key => $value) {
    $kermesse->__SET($key, $_POST[$key]);
  }

  $dt_kermesse->update($kermesse);

  $alert_msj = new AlertMsj("La Kermesse fue modificada con éxito", MSJ_PRIMARY);
  $_SESSION["alert_msj"] = $alert_msj;
}
function remove($dt_kermesse) {
  $id_kermesse = $_POST['id'];
  $dt_kermesse->delete_by_id($id_kermesse);

  $alert_msj = new AlertMsj("El arqueo de caja fue eliminado", MSJ_DANGER);
  $_SESSION["alert_msj"] = $alert_msj;
}

if ($_POST) {
  $dt_kermesse = new DtKermesse();

  $editar = array_key_exists('id_kermesse', $_POST) || !empty($_POST['id_kermesse']);
  $delete = array_key_exists('delete', $_POST);

  if ($delete) {
    remove($dt_kermesse);
    header("Location: /kermesse-project/kermesse");
  } else if ($editar) {
    update($dt_kermesse);
    header("Location: /kermesse-project/kermesse/");
  } else {
    insert($dt_kermesse);
    header("Location: /kermesse-project/kermesse");
  }
}
