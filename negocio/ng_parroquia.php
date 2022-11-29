<?php

include_once ('../entidades/parroquia.php');
include_once ('../datos/dt_parroquia.php');

function insert($dt_parroquia) {
  $parroquia = new parroquia();

  foreach($_POST as $key => $value) {
    $parroquia->__SET($key, $_POST[$key]);
  }

  $dt_parroquia->insert($parroquia);
}

function update($dt_parroquia) {
  $parroquia = $dt_parroquia->find_by_id($_POST['id_parroquia']);

  foreach($_POST as $key => $value) {
    $parroquia->__SET($key, $_POST[$key]);
  }

  $dt_parroquia->update($parroquia);
}
function remove($dt_parroquia) {
  $id_parroquia = $_POST['id'];
  $dt_parroquia->delete_by_id($id_parroquia);
}

if ($_POST) {
  $dt_parroquia = new Dtparroquia();

  $editar = array_key_exists('id_parroquia', $_POST) || !empty($_POST['id_parroquia']);
  $delete = array_key_exists('delete', $_POST);

  if ($delete) {
    remove($dt_parroquia);
    header("Location: /kermesse-project/parroquia");
  } else if ($editar) {
    update($dt_parroquia);
    header("Location: /kermesse-project/parroquia/");
  } else {
    insert($dt_parroquia);
    header("Location: /kermesse-project/parroquia");
  }
}
