<?php

include_once('../entidades/ingreso_comunidad.php');
include_once('../datos/dt_ingreso_comunidad.php');
include_once('../entidades/alert_msj.php');

session_start();

function insert($dt_ingreso_comunidad) {
  $ingreso_comunidad = new IngresoComunidad();

  foreach($_POST as $key => $value) {
    $ingreso_comunidad->__SET($key, $_POST[$key]);
  }
  $ingreso_comunidad->__SET('estado', 1);

  $dt_ingreso_comunidad->insert($ingreso_comunidad);

  $alert_msj = new AlertMsj("El ingreso_comunidad fue añadido exitosamente", MSJ_SUCCESS);
  $_SESSION["alert_msj"] = $alert_msj;
}

function update($dt_ingreso_comunidad) {
  $ingreso_comunidad = $dt_ingreso_comunidad->find_by_id($_POST['id_ingreso_comunidad']);

  foreach($_POST as $key => $value) {
    $ingreso_comunidad->__SET($key, $_POST[$key]);
  }
  $ingreso_comunidad->__SET('estado', 2);

  $dt_ingreso_comunidad->update($ingreso_comunidad);

  $alert_msj = new AlertMsj("El ingreso_comunidad fue modificado con éxito", MSJ_PRIMARY);
  $_SESSION["alert_msj"] = $alert_msj;
}
function remove($dt_ingreso_comunidad) {
  $ingreso_comunidad = $dt_ingreso_comunidad->find_by_id($_POST['id']);
  $dt_ingreso_comunidad->delete($ingreso_comunidad);

  $alert_msj = new AlertMsj("El ingreso_comunidad fue eliminado", MSJ_DANGER);
  $_SESSION["alert_msj"] = $alert_msj;
}

if ($_POST) {
  $dt_ingreso_comunidad = new DtIngresoComunidad();

  $editar = array_key_exists('id_ingreso_comunidad', $_POST) || !empty($_POST['id_ingreso_comunidad']);
  $delete = array_key_exists('delete', $_POST);

  if ($delete) {
    remove($dt_ingreso_comunidad);
    header("Location: /kermesse-project/ingreso_comunidad");
  } else if ($editar) {
    update($dt_ingreso_comunidad);
    header("Location: /kermesse-project/ingreso_comunidad/");
  } else {
    insert($dt_ingreso_comunidad);
    header("Location: /kermesse-project/ingreso_comunidad");
  }
}
