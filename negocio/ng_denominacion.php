<?php

include_once('../entidades/denominacion.php');
include_once('../datos/dt_denominacion.php');

function insert($dt_denominacion) {
  $denominacion = new denominacion();

  foreach($_POST as $key => $value) {
    $denominacion->__SET($key, $_POST[$key]);
  }

  $dt_denominacion->insert($denominacion);
}

function update($dt_denominacion) {
  $denominacion = $dt_denominacion->find_by_id($_POST['id_denominacion']);

  foreach($_POST as $key => $value) {
    $denominacion->__SET($key, $_POST[$key]);
  }

  $dt_denominacion->update($denominacion);
}
function remove($dt_denominacion) {
  $id_denominacion = $_POST['id'];
  $dt_denominacion->delete_by_id($id_denominacion);
}

if ($_POST) {
  $dt_denominacion = new Dtdenominacion();

  $editar = array_key_exists('id_denominacion', $_POST) || !empty($_POST['id_denominacion']);
  $delete = array_key_exists('delete', $_POST);

  if ($delete) {
    remove($dt_denominacion);
    header("Location: /kermesse-project/denominacion");
  } else if ($editar) {
    update($dt_denominacion);
    header("Location: /kermesse-project/denominacion/");
  } else {
    insert($dt_denominacion);
    header("Location: /kermesse-project/denominacion");
  }
}
