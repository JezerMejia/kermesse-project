<?php

include_once('../entidades/kermesse.php');
include_once('../datos/dt_kermesse.php');

function insert($dt_kermesse) {
  $kermesse = new Kermesse();

  foreach($_POST as $key => $value) {
    $kermesse->__SET($key, $_POST[$key]);
  }

  $dt_kermesse->insert($kermesse);
}

function update($dt_kermesse) {
  $kermesse = $dt_kermesse->find_by_id($_POST['id_kermesse']);

  foreach($_POST as $key => $value) {
    $kermesse->__SET($key, $_POST[$key]);
  }

  $dt_kermesse->update($kermesse);
}
function remove($dt_kermesse) {
  $id_kermesse = $_POST['id'];
  $dt_kermesse->delete_by_id($id_kermesse);
}

if ($_POST) {
  $dt_kermesse = new DtKermesse();

  $editar = array_key_exists('id_kermesse', $_POST) || !empty($_POST['id_kermesse']);
  $delete = array_key_exists('delete', $_POST);

  if ($delete) {
    remove($dt_kermesse);
    header("Location: /kermesse-project/kermesse");
  } else if ($editar) {
    update($dt_kermesse);
    header("Location: /kermesse-project/kermesse/");
  } else {
    insert($dt_kermesse);
    header("Location: /kermesse-project/kermesse");
  }
}
