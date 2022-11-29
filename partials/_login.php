<?php
include_once dirname(__DIR__) . "/datos/dt_opcion.php";

$url_opcion = explode('/', $url)[1];
$dt_opcion = new DtOpcion();
$has_access = 0;

if (isset($_SESSION['usuario'])) {
  $opciones = $dt_opcion->get_by_user_id($logged_user->__GET('id_usuario'));
} else {
  $opciones = [];
}
$opciones = array_map(function($opcion) {
  return $opcion->__GET('descripcion');
}, $opciones);
array_push($opciones, 'login', '');

$has_access = in_array($url_opcion, $opciones);


?>