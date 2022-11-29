<?php

include_once('../entidades/lista_precio.php');
include_once('../datos/dt_lista_precio.php');
include_once('../entidades/alert_msj.php');

session_start();

function insert($dt_lista_precio) {
  $lista_precio = new ListaPrecio();

  foreach($_POST as $key => $value) {
    $lista_precio->__SET($key, $_POST[$key]);
  }
  $lista_precio->__SET('estado', 1);

  $dt_lista_precio->insert($lista_precio);

  $alert_msj = new AlertMsj("El lista_precio fue añadido exitosamente", MSJ_SUCCESS);
  $_SESSION["alert_msj"] = $alert_msj;
}

function update($dt_lista_precio) {
  $lista_precio = $dt_lista_precio->find_by_id($_POST['id_lista_precio']);

  foreach($_POST as $key => $value) {
    $lista_precio->__SET($key, $_POST[$key]);
  }
  $lista_precio->__SET('estado', 2);

  $dt_lista_precio->update($lista_precio);

  $alert_msj = new AlertMsj("El lista_precio fue modificado con éxito", MSJ_PRIMARY);
  $_SESSION["alert_msj"] = $alert_msj;
}
function remove($dt_lista_precio) {
  $id_lista_precio = $_POST['id'];
  $dt_lista_precio->delete_by_id($id_lista_precio);

  $alert_msj = new AlertMsj("El lista_precio fue eliminado", MSJ_DANGER);
  $_SESSION["alert_msj"] = $alert_msj;
}

if ($_POST) {
  $dt_lista_precio = new DtListaPrecio();

  $editar = array_key_exists('id_lista_precio', $_POST) || !empty($_POST['id_lista_precio']);
  $delete = array_key_exists('delete', $_POST);

  if ($delete) {
    remove($dt_lista_precio);
    header("Location: /kermesse-project/lista_precio/");
  } else if ($editar) {
    update($dt_lista_precio);
    header("Location: /kermesse-project/lista_precio/");
  } else {
    insert($dt_lista_precio);
    header("Location: /kermesse-project/lista_precio/");
  }
}
