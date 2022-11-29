<?php

include_once ('../entidades/comunidad.php');
include_once ('../datos/dt_comunidad.php');
include_once('../entidades/alert_msj.php');

session_start();

function insert($dt_comunidad) {
  $comunidad = new comunidad();

  foreach($_POST as $key => $value) {
    $comunidad->__SET($key, $_POST[$key]);
  }

  $comunidad->__SET('estado', 1);

  $dt_comunidad->insert($comunidad);

  $alert_msj = new AlertMsj("La comunidad fue añadido exitosamente", MSJ_SUCCESS);
  $_SESSION["alert_msj"] = $alert_msj;
}

function update($dt_comunidad) {
  $comunidad = $dt_comunidad->find_by_id($_POST['id_comunidad']);

  foreach($_POST as $key => $value) {
    $comunidad->__SET($key, $_POST[$key]);
  }
  $comunidad->__SET('estado', 2);

  $dt_comunidad->update($comunidad);

  $alert_msj = new AlertMsj("La comunidad fue modificado con éxito", MSJ_PRIMARY);
  $_SESSION["alert_msj"] = $alert_msj;
}
function remove($dt_comunidad) {
  $comunidad = $dt_comunidad->find_by_id($_POST['id']);
  $dt_comunidad->delete($comunidad);

  $alert_msj = new AlertMsj("La comunidad fue eliminada", MSJ_DANGER);
  $_SESSION["alert_msj"] = $alert_msj;
}

if ($_POST) {
  $dt_comunidad = new DtComunidad();

  $editar = array_key_exists('id_comunidad', $_POST) || !empty($_POST['id_comunidad']);
  $delete = array_key_exists('delete', $_POST);

  if ($delete) {
    remove($dt_comunidad);
    header("Location: /kermesse-project/comunidad");
  } else if ($editar) {
    update($dt_comunidad);
    header("Location: /kermesse-project/comunidad/");
  } else {
    insert($dt_comunidad);
    header("Location: /kermesse-project/comunidad");
  }
}
