<?php

include_once('../entidades/lista_precio.php');
include_once('../datos/dt_lista_precio.php');

function insert($dt_lista_precio) {
  $lista_precio = new ListaPrecio();

  foreach($_POST as $key => $value) {
    $lista_precio->__SET($key, $_POST[$key]);
  }

  $dt_lista_precio->insert($lista_precio);
}

function update($dt_lista_precio) {
  $lista_precio = $dt_lista_precio->find_by_id($_POST['id_lista_precio']);

  foreach($_POST as $key => $value) {
    $lista_precio->__SET($key, $_POST[$key]);
  }

  $dt_lista_precio->update($lista_precio);
}

if ($_POST) {
  $dt_lista_precio = new DtListaPrecio();

  $editar = array_key_exists('id_lista_precio', $_POST) || !empty($_POST['id_lista_precio']);

  if ($editar) {
    update($dt_lista_precio);
    header("Location: /kermesse-project/lista_precio/");
  } else {
    insert($dt_lista_precio);
    header("Location: /kermesse-project/lista_precio");
  }
}
