<?php

include('../entidades/usuario.php');
include('../datos/dt_usuario.php');

$dt_usuario = new DtUsuario();

if ($_POST) {
  $username = $_POST["usuario"];
  $password = $_POST["pwd"];

  if (!empty($username) && !empty($password)) {
    $usuario = $dt_usuario->login($username, $password);
    if (!empty($usuario)) {
      session_start();
      $_SESSION['usuario'] = $usuario;
      if (!isset($_SESSION['usuario'])) {
        header("Location: /kermesse-project/login");
      } else {
        header("Location: /kermesse-project");
      }
    } else {
      header("Location: /kermesse-project/login?error=3;username=$username");
    }
  } else if (!empty($username)){
    header("Location: /kermesse-project/login?error=2;username=$username");
  } else {
    header("Location: /kermesse-project/login?error=1");
  }
}
