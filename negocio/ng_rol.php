<?php

include_once('../entidades/rol.php');
include_once('../datos/dt_rol.php');

function insert($dt_rol) {
  $rol = new Rol();

  foreach($_POST as $key => $value) {
    $rol->__SET($key, $_POST[$key]);
  }
  $rol->__SET('estado', 1);

  $dt_rol->insert($rol);
}

function update($dt_rol) {
  $rol = $dt_rol->find_by_id($_POST['id_rol']);

  foreach($_POST as $key => $value) {
    $rol->__SET($key, $_POST[$key]);
  }
  $rol->__SET('estado', 2);

  $dt_rol->update($rol);
}
function remove($dt_rol) {
  $id_rol = $_POST['id'];
  $dt_rol->delete_by_id($id_rol);
}

if ($_POST) {
  $dt_rol = new DtRol();

  $editar = array_key_exists('id_rol', $_POST) || !empty($_POST['id_rol']);
  $delete = array_key_exists('delete', $_POST);

  if ($delete) {
    remove($dt_rol);
    header("Location: /kermesse-project/rol");
  } else if ($editar) {
    update($dt_rol);
    header("Location: /kermesse-project/rol/");
  } else {
    insert($dt_rol);
    header("Location: /kermesse-project/rol");
  }
}
