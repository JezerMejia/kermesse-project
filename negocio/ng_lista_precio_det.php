<?php

include_once('../entidades/lista_precio_det.php');
include_once('../datos/dt_lista_precio_det.php');
include_once('../entidades/alert_msj.php');

session_start();

function insert($dt_lista_precio_det) {
  $lista_precio_det = new ListaPrecioDet();

  foreach($_POST as $key => $value) {
    $lista_precio_det->__SET($key, $_POST[$key]);
  }
  $lista_precio_det->__SET('estado', 1);

  $dt_lista_precio_det->insert($lista_precio_det);

  $alert_msj = new AlertMsj("El lista_precio_det fue añadido exitosamente", MSJ_SUCCESS);
  $_SESSION["alert_msj"] = $alert_msj;
}

function update($dt_lista_precio_det) {
  $lista_precio_det = $dt_lista_precio_det->find_by_id($_POST['id_lista_precio_det']);

  foreach($_POST as $key => $value) {
    $lista_precio_det->__SET($key, $_POST[$key]);
  }
  $lista_precio_det->__SET('estado', 2);

  $dt_lista_precio_det->update($lista_precio_det);

  $alert_msj = new AlertMsj("El lista_precio_det fue modificado con éxito", MSJ_PRIMARY);
  $_SESSION["alert_msj"] = $alert_msj;
}
function remove($dt_lista_precio_det) {
  $id_lista_precio_det = $_POST['id'];
  $dt_lista_precio_det->delete_by_id($id_lista_precio_det);

  $alert_msj = new AlertMsj("El lista_precio_det fue eliminado", MSJ_DANGER);
  $_SESSION["alert_msj"] = $alert_msj;
}

if ($_POST) {
  $dt_lista_precio_det = new DtListaPrecioDet();

  $editar = array_key_exists('id_lista_precio_det', $_POST) || !empty($_POST['id_lista_precio_det']);
  $delete = array_key_exists('delete', $_POST);
  $parent_id = $_POST['parent_id'];

  if ($delete) {
    remove($dt_lista_precio_det);
    header("Location: /kermesse-project/lista_precio/editar/" . $_GET['parent_id']);
  } else if ($editar) {
    update($dt_lista_precio_det);
    header("Location: /kermesse-project/lista_precio/editar/$parent_id");
  } else {
    insert($dt_lista_precio_det);
    header("Location: /kermesse-project/lista_precio/editar/$parent_id");
  }
}
