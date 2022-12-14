<?php

include_once('../entidades/categoria_gastos.php');
include_once('../datos/dt_categoria_gastos.php');
include_once('../entidades/alert_msj.php');

session_start();

function insert($dt_cat_gastos) {
  $cat_gasto = new CategoriaGastos();

  foreach($_POST as $key => $value) {
    $cat_gasto->__SET($key, $_POST[$key]);
  }
  $cat_gasto->__SET('estado', 1);

  $dt_cat_gastos->insert($cat_gasto);

  $alert_msj = new AlertMsj("La categoría de gastos fue añadida exitosamente", MSJ_SUCCESS);
  $_SESSION["alert_msj"] = $alert_msj;
}

function update($dt_cat_gastos) {
  $cat_gasto = $dt_cat_gastos->find_by_id($_POST['id_categoria_gastos']);

  foreach($_POST as $key => $value) {
    $cat_gasto->__SET($key, $_POST[$key]);
  }
  $cat_gasto->__SET('estado', 2);

  $dt_cat_gastos->update($cat_gasto);

  $alert_msj = new AlertMsj("La categoría de gastos fue modificada con éxito", MSJ_PRIMARY);
  $_SESSION["alert_msj"] = $alert_msj;
}
function remove($dt_cat_gastos) {
  $cat_gasto = $dt_cat_gastos->find_by_id($_POST['id']);
  $dt_cat_gastos->delete($cat_gasto);

  $alert_msj = new AlertMsj("La categoría de gastos fue eliminada", MSJ_DANGER);
  $_SESSION["alert_msj"] = $alert_msj;
}

if ($_POST) {
  $dt_cat_gastos = new DtCategoriaGastos();

  $editar = array_key_exists('id_categoria_gastos', $_POST) || !empty($_POST['id_categoria_gastos']);
  $delete = array_key_exists('delete', $_POST);

  if ($delete) {
    remove($dt_cat_gastos);
    header("Location: /kermesse-project/categoria_gastos");
  } else if ($editar) {
    update($dt_cat_gastos);
    header("Location: /kermesse-project/categoria_gastos/");
  } else {
    insert($dt_cat_gastos);
    header("Location: /kermesse-project/categoria_gastos");
  }
}
