<?php

include_once('../entidades/control_bonos.php');
include_once('../datos/dt_control_bonos.php');

function insert($dt_control_bonos) {
  $control_bonos = new ControlBonos();

  foreach($_POST as $key => $value) {
    $control_bonos->__SET($key, $_POST[$key]);
  }

  $dt_control_bonos->insert($control_bonos);
}

function update($dt_control_bonos) {
  $control_bonos = $dt_control_bonos->find_by_id($_POST['id_control_bonos']);

  foreach($_POST as $key => $value) {
    $control_bonos->__SET($key, $_POST[$key]);
  }

  $dt_control_bonos->update($control_bonos);
}

if ($_POST) {
  $dt_control_bonos = new DtControlBonos();

  $editar = array_key_exists('id_control_bonos', $_POST) || !empty($_POST['id_control_bonos']);

  if ($editar) {
    update($dt_control_bonos);
    header("Location: /kermesse-project/control_bonos/");
  } else {
    insert($dt_control_bonos);
    header("Location: /kermesse-project/control_bonos");
  }
}
