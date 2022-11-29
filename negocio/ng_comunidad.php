<?php

include_once ('../entidades/comunidad.php');
include_once ('../datos/dt_comunidad.php');

function insert($dt_comunidad) {
  $comunidad = new comunidad();

  foreach($_POST as $key => $value) {
    $comunidad->__SET($key, $_POST[$key]);
  }

  $dt_comunidad->insert($comunidad);
}

function update($dt_comunidad) {
  $comunidad = $dt_comunidad->find_by_id($_POST['id_comunidad']);

  foreach($_POST as $key => $value) {
    $comunidad->__SET($key, $_POST[$key]);
  }

  $dt_comunidad->update($comunidad);
}
function remove($dt_comunidad) {
  $id_comunidad = $_POST['id'];
  $dt_comunidad->delete_by_id($id_comunidad);
}

if ($_POST) {
  $dt_comunidad = new DtComunidad();

  $editar = array_key_exists('id_comunidad', $_POST) || !empty($_POST['id_comunidad']);
  $delete = array_key_exists('delete', $_POST);

  if ($delete) {
    remove($dt_comunidad);
    header("Location: /kermesse-project/comunidad");
  } else if ($editar) {
    update($dt_comunidad);
    header("Location: /kermesse-project/comunidad/");
  } else {
    insert($dt_comunidad);
    header("Location: /kermesse-project/comunidad");
  }
}
