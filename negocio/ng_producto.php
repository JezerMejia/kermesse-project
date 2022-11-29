<?php

include_once ('../entidades/producto.php');
include_once ('../datos/dt_producto.php');
include_once('../entidades/alert_msj.php');

session_start();

function insert($dt_producto) {
  $producto = new producto();

  foreach($_POST as $key => $value) {
    $producto->__SET($key, $_POST[$key]);
  }

  $producto->__SET('estado', 1);

  $dt_produto->insert($producto);

  $alert_msj = new AlertMsj("El producto fue añadido exitosamente", MSJ_SUCCESS);
  $_SESSION["alert_msj"] = $alert_msj;
}

function update($dt_producto) {
  $producto = $dt_producto->find_by_id($_POST['id_producto']);

  foreach($_POST as $key => $value) {
    $producto->__SET($key, $_POST[$key]);
  }
  $producto->__SET('estado', 2);

  $dt_producto->update($producto);

  $alert_msj = new AlertMsj("El producto fue modificado con éxito", MSJ_PRIMARY);
  $_SESSION["alert_msj"] = $alert_msj;
}
function remove($dt_producto) {
  $producto = $dt_producto->find_by_id($_POST['id']);
  $dt_producto->delete($producto);

  $alert_msj = new AlertMsj("El producto fue eliminado", MSJ_DANGER);
  $_SESSION["alert_msj"] = $alert_msj;
}

if ($_POST) {
  $dt_producto = new DtProducto();

  $editar = array_key_exists('id_producto', $_POST) || !empty($_POST['id_producto']);
  $delete = array_key_exists('delete', $_POST);

  if ($delete) {
    remove($dt_producto);
    header("Location: /kermesse-project/producto");
  } else if ($editar) {
    update($dt_producto);
    header("Location: /kermesse-project/producto/");
  } else {
    insert($dt_producto);
    header("Location: /kermesse-project/producto");
  }
}
