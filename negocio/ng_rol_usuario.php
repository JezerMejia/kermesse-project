<?php

include_once('../entidades/rol_usuario.php');
include_once('../datos/dt_rol_usuario.php');
include_once('../entidades/alert_msj.php');

session_start();

function insert($dt_rol_usuario) {
  $rol_usuario = new RolUsuario();

  foreach($_POST as $key => $value) {
    $rol_usuario->__SET($key, $_POST[$key]);
  }
  $rol_usuario->__SET('estado', 1);

  $dt_rol_usuario->insert($rol_usuario);

  $alert_msj = new AlertMsj("Se asignó un rol a un usuario exitosamente", MSJ_SUCCESS);
  $_SESSION["alert_msj"] = $alert_msj;
}

function update($dt_rol_usuario) {
  $rol_usuario = $dt_rol_usuario->find_by_id($_POST['id_rol_usuario']);

  foreach($_POST as $key => $value) {
    $rol_usuario->__SET($key, $_POST[$key]);
  }
  $rol_usuario->__SET('estado', 2);

  $dt_rol_usuario->update($rol_usuario);

  $alert_msj = new AlertMsj("Se modificó la asignación de rol a usuario con éxito", MSJ_PRIMARY);
  $_SESSION["alert_msj"] = $alert_msj;
}
function remove($dt_rol_usuario) {
  $rol_usuario = $dt_rol_usuario->find_by_id($_POST['id']);
  $dt_rol_usuario->delete($rol_usuario);

  $alert_msj = new AlertMsj("Se eliminó la relación de rol a usuario", MSJ_DANGER);
  $_SESSION["alert_msj"] = $alert_msj;
}

if ($_POST) {
  $dt_rol_usuario = new DtRolUsuario();

  $editar = array_key_exists('id_rol_usuario', $_POST) || !empty($_POST['id_rol_usuario']);
  $delete = array_key_exists('delete', $_POST);

  if ($delete) {
    remove($dt_rol_usuario);
    header("Location: /kermesse-project/rol_usuario");
  } else if ($editar) {
    update($dt_rol_usuario);
    header("Location: /kermesse-project/rol_usuario/");
  } else {
    insert($dt_rol_usuario);
    header("Location: /kermesse-project/rol_usuario");
  }
}

