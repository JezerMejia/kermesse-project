<?php

include_once('../entidades/ingreso_comunidad.php');
include_once('../datos/dt_ingreso_comunidad.php');

function insert($dt_ingreso_comunidad) {
  $ingreso_comunidad = new IngresoComunidad();

  foreach($_POST as $key => $value) {
    $ingreso_comunidad->__SET($key, $_POST[$key]);
  }

  $dt_ingreso_comunidad->insert($ingreso_comunidad);
}

function update($dt_ingreso_comunidad) {
  $ingreso_comunidad = $dt_ingreso_comunidad->find_by_id($_POST['id_ingreso_comunidad']);

  foreach($_POST as $key => $value) {
    $ingreso_comunidad->__SET($key, $_POST[$key]);
  }

  $dt_ingreso_comunidad->update($ingreso_comunidad);
}

if ($_POST) {
  $dt_ingreso_comunidad = new DtIngresoComunidad();

  $editar = array_key_exists('id_ingreso_comunidad', $_POST) || !empty($_POST['id_ingreso_comunidad']);

  if ($editar) {
    update($dt_ingreso_comunidad);
    header("Location: /kermesse-project/ingreso_comunidad/");
  } else {
    insert($dt_ingreso_comunidad);
    header("Location: /kermesse-project/ingreso_comunidad");
  }
}
