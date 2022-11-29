<?php

include_once ('../entidades/parroquia.php');
include_once ('../datos/dt_parroquia.php');
include_once('../entidades/alert_msj.php');

session_start();

function insert($dt_parroquia) {
  $parroquia = new parroquia();

  foreach($_POST as $key => $value) {
    $parroquia->__SET($key, $_POST[$key]);
  }

  $dt_parroquia->insert($parroquia);

  $alert_msj = new AlertMsj("La parroquia fue añadida con éxito", MSJ_SUCCESS);
  $_SESSION["alert_msj"] = $alert_msj;
}

function update($dt_parroquia) {
  $parroquia = $dt_parroquia->find_by_id($_POST['id_parroquia']);

  foreach($_POST as $key => $value) {
    $parroquia->__SET($key, $_POST[$key]);
  }

  $alert_msj = new AlertMsj("La parroquia fue modificada con éxito", MSJ_PRIMARY);
  $_SESSION["alert_msj"] = $alert_msj;
  $dt_parroquia->update($parroquia);
}
function remove($dt_parroquia) {
  $parroquia = $dt_parroquia->find_by_id($_POST['id']);
  $dt_parroquia->delete($parroquia);

  $alert_msj = new AlertMsj("La parroquia fue eliminada", MSJ_DANGER);
  $_SESSION["alert_msj"] = $alert_msj;
}

if ($_POST) {
  $dt_parroquia = new Dtparroquia();

  $editar = array_key_exists('id_parroquia', $_POST) || !empty($_POST['id_parroquia']);
  $delete = array_key_exists('delete', $_POST);

  if ($delete) {
    remove($dt_parroquia);
    header("Location: /kermesse-project/parroquia");
  } else if ($editar) {
    update($dt_parroquia);
    header("Location: /kermesse-project/parroquia/");
  } else {
    insert($dt_parroquia);
    header("Location: /kermesse-project/parroquia");
  }
}
