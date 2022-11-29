<?php

include_once('../entidades/denominacion.php');
include_once('../datos/dt_denominacion.php');

function insert($dt_denominacion) {
  $denominacion = new Denominacion();

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

if ($_POST) {
  $dt_denominacion = new DtDenominacion();

  $editar = array_key_exists('id_denominacion', $_POST) || !empty($_POST['id_denominacion']);

  if ($editar) {
    update($dt_denominacion);
    header("Location: /kermesse-project/denominacion/");
  } else {
    insert($dt_denominacion);
    header("Location: /kermesse-project/denominacion");
  }
}
