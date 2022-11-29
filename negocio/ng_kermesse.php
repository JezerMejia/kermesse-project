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

  if ($editar) {
    $kermesse->__SET('id_kermesse', $_POST['id_kermesse']);
    // $dt_kermesse->update($kermesse);
    // header("Location: /kermesse-project/kermesse/");
  } else {
    foreach (get_object_vars($kermesse) as $key => $value) {
      echo 'hola';
    }
    $dt_kermesse->insert($kermesse);
    // header("Location: /kermesse-project/kermesse");
  }

}