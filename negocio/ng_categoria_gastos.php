<?php

include_once('../entidades/categoria_gastos.php');
include_once('../datos/dt_categoria_gastos.php');

function insert($dt_cat_gastos) {
  $cat_gasto = new CategoriaGastos();

  foreach($_POST as $key => $value) {
    $cat_gasto->__SET($key, $_POST[$key]);
  }
  $cat_gasto->__SET('estado', 1);

  $dt_cat_gastos->insert($cat_gasto);
}

function update($dt_cat_gastos) {
  $cat_gasto = $dt_cat_gastos->find_by_id($_POST['id_categoria_gastos']);

  foreach($_POST as $key => $value) {
    $cat_gasto->__SET($key, $_POST[$key]);
  }
  $cat_gasto->__SET('estado', 2);

  $dt_cat_gastos->update($cat_gasto);
}
function remove($dt_cat_gastos) {
  $id_cat_gastos = $_POST['id'];
  $dt_cat_gastos->delete_by_id($id_cat_gastos);
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
