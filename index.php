<?php
include_once dirname(__DIR__) . "/kermesse-project/entidades/usuario.php";

session_start();
if (isset($_SESSION['usuario'])) {
  $logged_user = $_SESSION['usuario'];
}


$base_url = '/' . basename(__DIR__);
$req_url = $_SERVER['REQUEST_URI'];
$url = rtrim(str_replace($base_url, '', $req_url), '/');
$url = explode('?', $url)[0];
$id_from_url = (int)filter_var($url, FILTER_SANITIZE_NUMBER_INT);

include_once dirname(__DIR__) . "/kermesse-project/partials/_login.php";
// echo "<h1>" . $url_opcion . "</h1>";

if(!$has_access) {
  echo "El usuario no tiene acceso a " . $url_opcion;
} else {
  switch (true) {
    case preg_match('/^$/', $url):
      require __DIR__ . '/vistas/index.php';
      break;
    default:
      require __DIR__ . '/vistas/404.php';
      break;
    case preg_match('/^\/login\/?$/', $url):
      require __DIR__ . '/vistas/login.php';
      break;
    case preg_match('/^\/rol_opcion\/?$/', $url):
      require __DIR__ . '/vistas/rol_opcion/mostrar.php';
      break;
    case preg_match('/^\/rol_opcion\/\d*$/', $url):
      require __DIR__ . '/vistas/rol_opcion/_id.php';
      break;
    case preg_match('/^\/rol_opcion\/editar\/\d*$/', $url):
      require __DIR__ . '/vistas/rol_opcion/editar.php';
      break;
    case preg_match('/^\/rol_opcion\/agregar$/', $url):
      require __DIR__ . '/vistas/rol_opcion/agregar.php';
      break;
    case preg_match('/^\/rol_usuario\/?$/', $url):
      require __DIR__ . '/vistas/rol_usuario/mostrar.php';
      break;
    case preg_match('/^\/rol_usuario\/\d*$/', $url):
      require __DIR__ . '/vistas/rol_usuario/_id.php';
      break;
    case preg_match('/^\/rol_usuario\/editar\/\d*$/', $url):
      require __DIR__ . '/vistas/rol_usuario/editar.php';
      break;
    case preg_match('/^\/rol_usuario\/agregar$/', $url):
      require __DIR__ . '/vistas/rol_usuario/agregar.php';
      break;
    case preg_match('/^\/tasa_cambio_det\/?$/', $url):
      require __DIR__ . '/vistas/tasa_cambio_det/mostrar.php';
      break;
    case preg_match('/^\/tasa_cambio_det\/\d*$/', $url):
      require __DIR__ . '/vistas/tasa_cambio_det/_id.php';
      break;
    case preg_match('/^\/tasa_cambio_det\/editar\/\d*$/', $url):
      require __DIR__ . '/vistas/tasa_cambio_det/editar.php';
      break;
    case preg_match('/^\/tasa_cambio_det\/eliminar\/\d*$/', $url):
      require __DIR__ . '/vistas/tasa_cambio_det/eliminar.php';
      break;
    case preg_match('/^\/tasa_cambio_det\/agregar$/', $url):
      require __DIR__ . '/vistas/tasa_cambio_det/agregar.php';
      break;
    case preg_match('/^\/arqueo_caja\/?$/', $url):
      require __DIR__ . '/vistas/arqueo_caja/mostrar.php';
      break;
    case preg_match('/^\/arqueo_caja\/\d*$/', $url):
      require __DIR__ . '/vistas/arqueo_caja/_id.php';
      break;
    case preg_match('/^\/arqueo_caja\/editar\/\d*$/', $url):
      require __DIR__ . '/vistas/arqueo_caja/editar.php';
      break;
    case preg_match('/^\/arqueo_caja\/eliminar\/\d*$/', $url):
      require __DIR__ . '/vistas/arqueo_caja/eliminar.php';
      break;
    case preg_match('/^\/arqueo_caja\/agregar$/', $url):
      require __DIR__ . '/vistas/arqueo_caja/agregar.php';
      break;
    case preg_match('/^\/arqueo_caja_det\/?$/', $url):
      require __DIR__ . '/vistas/arqueo_caja_det/mostrar.php';
      break;
    case preg_match('/^\/arqueo_caja_det\/\d*$/', $url):
      require __DIR__ . '/vistas/arqueo_caja_det/_id.php';
      break;
    case preg_match('/^\/arqueo_caja_det\/editar\/\d*$/', $url):
      require __DIR__ . '/vistas/arqueo_caja_det/editar.php';
      break;
    case preg_match('/^\/arqueo_caja_det\/agregar$/', $url):
      require __DIR__ . '/vistas/arqueo_caja_det/agregar.php';
      break;
    case preg_match('/^\/categoria_gastos\/?$/', $url):
      require __DIR__ . '/vistas/categoria_gastos/mostrar.php';
      break;
    case preg_match('/^\/categoria_gastos\/\d*$/', $url):
      require __DIR__ . '/vistas/categoria_gastos/_id.php';
      break;
    case preg_match('/^\/categoria_gastos\/editar\/\d*$/', $url):
      require __DIR__ . '/vistas/categoria_gastos/editar.php';
      break;
    case preg_match('/^\/categoria_gastos\/agregar$/', $url):
      require __DIR__ . '/vistas/categoria_gastos/agregar.php';
      break;
    case preg_match('/^\/categoria_productos\/?$/', $url):
      require __DIR__ . '/vistas/categoria_productos/mostrar.php';
      break;
    case preg_match('/^\/categoria_productos\/\d*$/', $url):
      require __DIR__ . '/vistas/categoria_productos/_id.php';
      break;
    case preg_match('/^\/categoria_productos\/editar\/\d*$/', $url):
      require __DIR__ . '/vistas/categoria_productos/editar.php';
      break;
    case preg_match('/^\/categoria_productos\/agregar$/', $url):
      require __DIR__ . '/vistas/categoria_productos/agregar.php';
      break;
    case preg_match('/^\/comunidad\/?$/', $url):
      require __DIR__ . '/vistas/comunidad/mostrar.php';
      break;
    case preg_match('/^\/comunidad\/\d*$/', $url):
      require __DIR__ . '/vistas/comunidad/_id.php';
      break;
    case preg_match('/^\/comunidad\/editar\/\d*$/', $url):
      require __DIR__ . '/vistas/comunidad/editar.php';
      break;
    case preg_match('/^\/comunidad\/agregar$/', $url):
      require __DIR__ . '/vistas/comunidad/agregar.php';
      break;
    case preg_match('/^\/control_bonos\/?$/', $url):
      require __DIR__ . '/vistas/control_bonos/mostrar.php';
      break;
    case preg_match('/^\/control_bonos\/\d*$/', $url):
      require __DIR__ . '/vistas/control_bonos/_id.php';
      break;
    case preg_match('/^\/control_bonos\/editar\/\d*$/', $url):
      require __DIR__ . '/vistas/control_bonos/editar.php';
      break;
    case preg_match('/^\/control_bonos\/agregar$/', $url):
      require __DIR__ . '/vistas/control_bonos/agregar.php';
      break;
    case preg_match('/^\/denominacion\/?$/', $url):
      require __DIR__ . '/vistas/denominacion/mostrar.php';
      break;
    case preg_match('/^\/denominacion\/\d*$/', $url):
      require __DIR__ . '/vistas/denominacion/_id.php';
      break;
    case preg_match('/^\/denominacion\/editar\/\d*$/', $url):
      require __DIR__ . '/vistas/denominacion/editar.php';
      break;
    case preg_match('/^\/denominacion\/agregar$/', $url):
      require __DIR__ . '/vistas/denominacion/agregar.php';
      break;
    case preg_match('/^\/gasto\/?$/', $url):
      require __DIR__ . '/vistas/gasto/mostrar.php';
      break;
    case preg_match('/^\/gasto\/\d*$/', $url):
      require __DIR__ . '/vistas/gasto/_id.php';
      break;
    case preg_match('/^\/gasto\/editar\/\d*$/', $url):
      require __DIR__ . '/vistas/gasto/editar.php';
      break;
    case preg_match('/^\/gasto\/agregar$/', $url):
      require __DIR__ . '/vistas/gasto/agregar.php';
      break;
    case preg_match('/^\/ingreso_comunidad\/?$/', $url):
      require __DIR__ . '/vistas/ingreso_comunidad/mostrar.php';
      break;
    case preg_match('/^\/ingreso_comunidad\/\d*$/', $url):
      require __DIR__ . '/vistas/ingreso_comunidad/_id.php';
      break;
    case preg_match('/^\/ingreso_comunidad\/editar\/\d*$/', $url):
      require __DIR__ . '/vistas/ingreso_comunidad/editar.php';
      break;
    case preg_match('/^\/ingreso_comunidad\/agregar$/', $url):
      require __DIR__ . '/vistas/ingreso_comunidad/agregar.php';
      break;
    case preg_match('/^\/ingreso_comunidad_det\/?$/', $url):
      require __DIR__ . '/vistas/ingreso_comunidad_det/mostrar.php';
      break;
    case preg_match('/^\/ingreso_comunidad_det\/\d*$/', $url):
      require __DIR__ . '/vistas/ingreso_comunidad_det/_id.php';
      break;
    case preg_match('/^\/ingreso_comunidad_det\/editar\/\d*$/', $url):
      require __DIR__ . '/vistas/ingreso_comunidad_det/editar.php';
      break;
    case preg_match('/^\/ingreso_comunidad_det\/agregar$/', $url):
      require __DIR__ . '/vistas/ingreso_comunidad_det/agregar.php';
      break;
    case preg_match('/^\/kermesse\/?$/', $url):
      require __DIR__ . '/vistas/kermesse/mostrar.php';
      break;
    case preg_match('/^\/kermesse\/\d*$/', $url):
      require __DIR__ . '/vistas/kermesse/_id.php';
      break;
    case preg_match('/^\/kermesse\/editar\/\d*$/', $url):
      require __DIR__ . '/vistas/kermesse/editar.php';
      break;
    case preg_match('/^\/kermesse\/eliminar\/\d*$/', $url):
      require __DIR__ . '/vistas/kermesse/eliminar.php';
      break;
    case preg_match('/^\/kermesse\/agregar$/', $url):
      require __DIR__ . '/vistas/kermesse/agregar.php';
      break;
    case preg_match('/^\/lista_precio\/?$/', $url):
      require __DIR__ . '/vistas/lista_precio/mostrar.php';
      break;
    case preg_match('/^\/lista_precio\/\d*$/', $url):
      require __DIR__ . '/vistas/lista_precio/_id.php';
      break;
    case preg_match('/^\/lista_precio\/editar\/\d*$/', $url):
      require __DIR__ . '/vistas/lista_precio/editar.php';
      break;
    case preg_match('/^\/lista_precio\/agregar$/', $url):
      require __DIR__ . '/vistas/lista_precio/agregar.php';
      break;
    case preg_match('/^\/lista_precio_det\/?$/', $url):
      require __DIR__ . '/vistas/lista_precio_det/mostrar.php';
      break;
    case preg_match('/^\/lista_precio_det\/\d*$/', $url):
      require __DIR__ . '/vistas/lista_precio_det/_id.php';
      break;
    case preg_match('/^\/lista_precio_det\/editar\/\d*$/', $url):
      require __DIR__ . '/vistas/lista_precio_det/editar.php';
      break;
    case preg_match('/^\/lista_precio_det\/agregar$/', $url):
      require __DIR__ . '/vistas/lista_precio_det/agregar.php';
      break;
    case preg_match('/^\/moneda\/?$/', $url):
      require __DIR__ . '/vistas/moneda/mostrar.php';
      break;
    case preg_match('/^\/moneda\/\d*$/', $url):
      require __DIR__ . '/vistas/moneda/_id.php';
      break;
    case preg_match('/^\/moneda\/editar\/\d*$/', $url):
      require __DIR__ . '/vistas/moneda/editar.php';
      break;
    case preg_match('/^\/moneda\/agregar$/', $url):
      require __DIR__ . '/vistas/moneda/agregar.php';
      break;
    case preg_match('/^\/opcion\/?$/', $url):
      require __DIR__ . '/vistas/opcion/mostrar.php';
      break;
    case preg_match('/^\/opcion\/\d*$/', $url):
      require __DIR__ . '/vistas/opcion/_id.php';
      break;
    case preg_match('/^\/opcion\/editar\/\d*$/', $url):
      require __DIR__ . '/vistas/opcion/editar.php';
      break;
    case preg_match('/^\/opcion\/agregar$/', $url):
      require __DIR__ . '/vistas/opcion/agregar.php';
      break;
    case preg_match('/^\/parroquia\/?$/', $url):
      require __DIR__ . '/vistas/parroquia/mostrar.php';
      break;
    case preg_match('/^\/parroquia\/\d*$/', $url):
      require __DIR__ . '/vistas/parroquia/_id.php';
      break;
    case preg_match('/^\/parroquia\/editar\/\d*$/', $url):
      require __DIR__ . '/vistas/parroquia/editar.php';
      break;
    case preg_match('/^\/parroquia\/agregar$/', $url):
      require __DIR__ . '/vistas/parroquia/agregar.php';
      break;
    case preg_match('/^\/producto\/?$/', $url):
      require __DIR__ . '/vistas/producto/mostrar.php';
      break;
    case preg_match('/^\/producto\/\d*$/', $url):
      require __DIR__ . '/vistas/producto/_id.php';
      break;
    case preg_match('/^\/producto\/editar\/\d*$/', $url):
      require __DIR__ . '/vistas/producto/editar.php';
      break;
    case preg_match('/^\/producto\/agregar$/', $url):
      require __DIR__ . '/vistas/producto/agregar.php';
      break;
    case preg_match('/^\/rol\/?$/', $url):
      require __DIR__ . '/vistas/rol/mostrar.php';
      break;
    case preg_match('/^\/rol\/\d*$/', $url):
      require __DIR__ . '/vistas/rol/_id.php';
      break;
    case preg_match('/^\/rol\/editar\/\d*$/', $url):
      require __DIR__ . '/vistas/rol/editar.php';
      break;
    case preg_match('/^\/rol\/agregar$/', $url):
      require __DIR__ . '/vistas/rol/agregar.php';
      break;
    case preg_match('/^\/tasa_cambio\/?$/', $url):
      require __DIR__ . '/vistas/tasa_cambio/mostrar.php';
      break;
    case preg_match('/^\/tasa_cambio\/\d*$/', $url):
      require __DIR__ . '/vistas/tasa_cambio/_id.php';
      break;
    case preg_match('/^\/tasa_cambio\/editar\/\d*$/', $url):
      require __DIR__ . '/vistas/tasa_cambio/editar.php';
      break;
    case preg_match('/^\/tasa_cambio\/eliminar\/\d*$/', $url):
      require __DIR__ . '/vistas/tasa_cambio/eliminar.php';
      break;
    case preg_match('/^\/tasa_cambio\/agregar$/', $url):
      require __DIR__ . '/vistas/tasa_cambio/agregar.php';
      break;
    case preg_match('/^\/usuarios\/?$/', $url):
      require __DIR__ . '/vistas/usuario/mostrar.php';
      break;
    case preg_match('/^\/usuarios\/\d*$/', $url):
      require __DIR__ . '/vistas/usuario/_id.php';
      break;
    case preg_match('/^\/usuarios\/editar\/\d*$/', $url):
      require __DIR__ . '/vistas/usuario/editar.php';
      break;
    case preg_match('/^\/usuarios\/eliminar\/\d*$/', $url):
      require __DIR__ . '/vistas/usuario/eliminar.php';
      break;
    case preg_match('/^\/usuarios\/agregar$/', $url):
      require __DIR__ . '/vistas/usuario/agregar.php';
      break;
  }
}

