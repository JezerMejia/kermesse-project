<?php

include('../entidades/usuario.php');
include('../datos/dt_usuario.php');

$dt_usuario = new DtUsuario();

if ($_POST) {
  $username = $_POST["usuario"];
  $password = $_POST["pwd"];

  if (!empty($usuario) && !empty($password)) {
    $usuario = $dt_usuario->login($username, $password);
    session_start();
    $_SESSION['usuario'] = $logged_user;
    if (!isset($_SESSION['acceso'])) {
      header("Location: /kermesse-project/login");
    } else {
      header("Location: /kermesse-project");
    }
  }
}
