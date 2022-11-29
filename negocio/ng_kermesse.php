<?php

include('../entidades/kermesse.php');
include('../datos/dt_kermesse.php');

$dt_kermesse = new DtKermesse();
$kermesse = new Kermesse();

if ($_POST) {
  $editar = $_POST['id_kermesse'] != 0;

  foreach($_POST as $key => $value) {
    $kermesse->__SET($key, $_POST[$key]);
  }
  $kermesse->__GET('id_parroquia');

  // $kermesse->__SET('nombre', $POST['nombre']);
  // $kermesse->__SET('fecha_inicio', $POST['fecha_inicio']);
  // $kermesse->__SET('fecha_final', $POST['fecha_final']);
  // $kermesse->__SET('descripcion', $POST['descripcion']);
  // $kermesse->__SET('estado', $POST['estado']);
  // $kermesse->__SET('usuario_creacion', $POST['usuario_creacion']);
  // $kermesse->__SET('fecha_creacion', $POST['fecha_creacion']);
  // $kermesse->__SET('usuario_modificacion', $POST['usuario_modificacion']);
  // $kermesse->__SET('fecha_modificacion', $POST['fecha_modificacion']);
  // $kermesse->__SET('usuario_eliminacion', $POST['usuario_eliminacion']);
  // $kermesse->__SET('fecha_eliminacion', $POST['fecha_eliminacion']);

  echo $kermesse->__GET('id_parroquia');

  if ($editar) {
    $kermesse->__SET('id_kermesse', $_POST['id_kermesse']);
    // $dt_kermesse->update($kermesse);
    // header("Location: /kermesse-project/kermesse/");
  } else {
    $kermesse->__SET('id_kermesse', NULL);
    $dt_kermesse->insert($kermesse);
    // header("Location: /kermesse-project/kermesse");
  }

}