<?php

include_once('../entidades/rol_opcion.php');
include_once('../datos/dt_rol_opcion.php');
include_once('../entidades/alert_msj.php');

session_start();

function insert($dt_rol_opcion) {
  $rol_opcion = new RolOpcion();

  foreach($_POST as $key => $value) {
    $rol_opcion->__SET($key, $_POST[$key]);
  }

  $rol_opcion->__SET('estado', 1);

  $dt_rol_opcion->insert($rol_opcion);

  $alert_msj = new AlertMsj("El rol opcion fue añadido exitosamente", MSJ_SUCCESS);
  $_SESSION["alert_msj"] = $alert_msj;
}

function update($dt_rol_opcion) {
  $rol_opcion = $dt_rol_opcion->find_by_id($_POST['id_rol_opcion']);

  foreach($_POST as $key => $value) {
    $rol_opcion->__SET($key, $_POST[$key]);
  }
  $rol_opcion->__SET('estado', 2);

  $dt_rol_opcion->update($rol_opcion);

  $alert_msj = new AlertMsj("El rol opcion fue modificado con éxito", MSJ_PRIMARY);
  $_SESSION["alert_msj"] = $alert_msj;
}
function remove($dt_rol_opcion) {
  $rol_opcion = $dt_rol_opcion->find_by_id($_POST['id']);
  $dt_rol_opcion->delete($rol_opcion);

  $alert_msj = new AlertMsj("El rol opcion fue eliminada", MSJ_DANGER);
  $_SESSION["alert_msj"] = $alert_msj;
}

if ($_POST) {
  $dt_rol_opcion = new DtRolOpcion();

  $editar = array_key_exists('id_rol_opcion', $_POST) || !empty($_POST['id_rol_opcion']);
  $delete = array_key_exists('delete', $_POST);

  if ($delete) {
    remove($dt_rol_opcion);
    header("Location: /kermesse-project/rol_opcion");
  } else if ($editar) {
    update($dt_rol_opcion);
    header("Location: /kermesse-project/rol_opcion/");
  } else {
    insert($dt_rol_opcion);
    header("Location: /kermesse-project/rol_opcion");
  }
}
