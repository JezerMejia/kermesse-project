<?php

include('../entidades/usuario.php');
include('../datos/dt_usuario.php');

$dt_usuario = new DtUsuario();
$usuario = new Usuario();

if ($_POST) {
  $editar = $_POST['id_usuario'] != 0;

  $usuario->__SET('usuario', $_POST['usuario']);
  $usuario->__SET('pwd', $_POST['pwd']);
  $usuario->__SET('nombres', $_POST['nombres']);
  $usuario->__SET('apellidos', $_POST['apellidos']);
  $usuario->__SET('email', $_POST['email']);
  $usuario->__SET('estado', $_POST['estado']);

  if ($editar) {
    $usuario->__SET('id_usuario', $_POST['id_usuario']);
    echo ('caca');
  } else {
    $dt_usuario->insert($usuario);
  }
  header("Location: /kermesse-project/usuarios");

}