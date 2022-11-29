<?php

include_once('../entidades/ingreso_comunidad_det.php');
include_once('../datos/dt_ingreso_comunidad_det.php');
include_once('../entidades/alert_msj.php');

session_start();

function insert($dt_ingreso_comunidad_det) {
  $ingreso_comunidad_det = new IngresoComunidadDet();

  foreach($_POST as $key => $value) {
    $ingreso_comunidad_det->__SET($key, $_POST[$key]);
  }
  $ingreso_comunidad_det->__SET('estado', 1);

  $dt_ingreso_comunidad_det->insert($ingreso_comunidad_det);

  $alert_msj = new AlertMsj("El ingreso_comunidad_det fue añadido exitosamente", MSJ_SUCCESS);
  $_SESSION["alert_msj"] = $alert_msj;
}

function update($dt_ingreso_comunidad_det) {
  $ingreso_comunidad_det = $dt_ingreso_comunidad_det->find_by_id($_POST['id_ingreso_comunidad_det']);

  foreach($_POST as $key => $value) {
    $ingreso_comunidad_det->__SET($key, $_POST[$key]);
  }
  $ingreso_comunidad_det->__SET('estado', 2);

  $dt_ingreso_comunidad_det->update($ingreso_comunidad_det);

  $alert_msj = new AlertMsj("El ingreso_comunidad_det fue modificado con éxito", MSJ_PRIMARY);
  $_SESSION["alert_msj"] = $alert_msj;
}
function remove($dt_ingreso_comunidad_det) {
  $id_ingreso_comunidad_det = $_POST['id'];
  $dt_ingreso_comunidad_det->delete_by_id($id_ingreso_comunidad_det);

  $alert_msj = new AlertMsj("El ingreso_comunidad_det fue eliminado", MSJ_DANGER);
  $_SESSION["alert_msj"] = $alert_msj;
}

if ($_POST) {
  $dt_ingreso_comunidad_det = new DtIngresoComunidadDet();

  $editar = array_key_exists('id_ingreso_comunidad_det', $_POST) || !empty($_POST['id_ingreso_comunidad_det']);
  $delete = array_key_exists('delete', $_POST);
  $parent_id = $_POST['parent_id'];

  if ($delete) {
    remove($dt_ingreso_comunidad_det);
    header("Location: /kermesse-project/ingreso_comunidad/editar/" . $_GET['parent_id']);
  } else if ($editar) {
    update($dt_ingreso_comunidad_det);
    header("Location: /kermesse-project/ingreso_comunidad/editar/$parent_id");
  } else {
    insert($dt_ingreso_comunidad_det);
    header("Location: /kermesse-project/ingreso_comunidad/editar/$parent_id");
  }
}
