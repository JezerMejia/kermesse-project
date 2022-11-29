<?php

include_once('../entidades/usuario.php');
include_once('../datos/dt_usuario.php');

function insert($dt_usuario) {
  $usuario = new Usuario();

  foreach($_POST as $key => $value) {
    $usuario->__SET($key, $_POST[$key]);
  }

  $dt_usuario->insert($usuario);
}

function update($dt_usuario) {
  $usuario = $dt_usuario->find_by_id($_POST['id_usuario']);

  foreach($_POST as $key => $value) {
    $usuario->__SET($key, $_POST[$key]);
  }

  $dt_usuario->update($usuario);
}
function remove($dt_usuario) {
  $id_usuario = $_POST['id'];
  $dt_usuario->delete_by_id($id_usuario);
}

if ($_POST) {
  $dt_usuario = new DtUsuario();

  $editar = array_key_exists('id_usuario', $_POST) || !empty($_POST['id_usuario']);
  $delete = array_key_exists('delete', $_POST);

  if ($delete) {
    remove($dt_usuario);
    header("Location: /kermesse-project/usuarios");
  } else if ($editar) {
    update($dt_usuario);
    header("Location: /kermesse-project/usuarios");
  } else {
    insert($dt_usuario);
    header("Location: /kermesse-project/usuarios");
  }
}
