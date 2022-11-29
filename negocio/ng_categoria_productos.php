<?php

include_once('../entidades/categoria_productos.php');
include_once('../datos/dt_categoria_productos.php');
include_once('../entidades/alert_msj.php');

session_start();

function insert($dt_cat_prod) {
  $cat_prod = new CategoriaProductos();

  foreach($_POST as $key => $value) {
    $cat_prod->__SET($key, $_POST[$key]);
  }
  $cat_prod->__SET('estado', 1);

  $dt_cat_prod->insert($cat_prod);

  $alert_msj = new AlertMsj("La categoría de productos fue añadida exitosamente", MSJ_SUCCESS);
  $_SESSION["alert_msj"] = $alert_msj;
}

function update($dt_cat_prod) {
  $cat_prod = $dt_cat_prod->find_by_id($_POST['id_categoria_producto']);

  foreach($_POST as $key => $value) {
    $cat_prod->__SET($key, $_POST[$key]);
  }
  $cat_prod->__SET('estado', 2);

  $dt_cat_prod->update($cat_prod);

  $alert_msj = new AlertMsj("La categoría de productos fue modificada con éxito", MSJ_PRIMARY);
  $_SESSION["alert_msj"] = $alert_msj;
}
function remove($dt_cat_prod) {
  $cat_prod = $dt_cat_prod->find_by_id($_POST['id']);
  $dt_cat_prod->delete($cat_prod);

  $alert_msj = new AlertMsj("La categoría de productos fue eliminada", MSJ_DANGER);
  $_SESSION["alert_msj"] = $alert_msj;
}

if ($_POST) {
  $dt_cat_prod = new DtCategoriaProductos();

  $editar = array_key_exists('id_categoria_producto', $_POST) || !empty($_POST['id_categoria_producto']);
  $delete = array_key_exists('delete', $_POST);

  if ($delete) {
    remove($dt_cat_prod);
    header("Location: /kermesse-project/categoria_productos");
  } else if ($editar) {
    update($dt_cat_prod);
    header("Location: /kermesse-project/categoria_productos/");
  } else {
    insert($dt_cat_prod);
    header("Location: /kermesse-project/categoria_productos");
  }
}
