<?php

class Rol {

  // Attributes
  private $id_rol;
  private $descripcion;
  private $estado;

  // Methods
  public function __GET($k) { return $this -> $k; }
  public function __SET($k, $v) { $this -> $k = $v; }
}
