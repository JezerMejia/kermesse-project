<?php

include_once('../entidades/control_bonos.php');
include_once('../datos/dt_control_bonos.php');
include_once('../entidades/alert_msj.php');

session_start();

function insert($dt_control_bonos) {
  $control_bonos = new ControlBonos();

  foreach($_POST as $key => $value) {
    $control_bonos->__SET($key, $_POST[$key]);
  }

  $dt_control_bonos->insert($control_bonos);

  $alert_msj = new AlertMsj("El control bonos fue añadido exitosamente", MSJ_SUCCESS);
  $_SESSION["alert_msj"] = $alert_msj;
}

function update($dt_control_bonos) {
  $control_bonos = $dt_control_bonos->find_by_id($_POST['id_bono']);

  foreach($_POST as $key => $value) {
    $control_bonos->__SET($key, $_POST[$key]);
  }

  $dt_control_bonos->update($control_bonos);

  $alert_msj = new AlertMsj("El control bono fue modificado con éxito", MSJ_PRIMARY);
  $_SESSION["alert_msj"] = $alert_msj;
}
function remove($dt_control_bonos) {
  $id_control_bonos = $_POST['id'];
  $dt_control_bonos->delete_by_id($id_control_bonos);

  $alert_msj = new AlertMsj("El control bono fue eliminado", MSJ_DANGER);
  $_SESSION["alert_msj"] = $alert_msj;
}

if ($_POST) {
  $dt_control_bonos = new DtControlBonos();

  $editar = array_key_exists('id_bono', $_POST) || !empty($_POST['id_bono']);
  $delete = array_key_exists('delete', $_POST);

  if ($delete) {
    remove($dt_control_bonos);
    header("Location: /kermesse-project/control_bonos");
  } else if ($editar) {
    update($dt_control_bonos);
    header("Location: /kermesse-project/control_bonos/");
  } else {
    insert($dt_control_bonos);
    header("Location: /kermesse-project/control_bonos/");
  }
}
