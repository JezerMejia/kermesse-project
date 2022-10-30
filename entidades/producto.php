<?php

class Producto {

  // Attributes
  private $id_producto;
  private $id_comunidad;
  private $id_cat_producto;
  private $nombre;
  private $descripcion;
  private $cantidad;
  private $preciov_sugerido;
  private $estado;

  // Methods
  public function __GET($k) { return $this -> $k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
