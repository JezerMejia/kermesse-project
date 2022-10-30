<?php

class Opcion {

  // Attributes
  private $id_opcion;
  private $descripcion;
  private $estado;

  // Methods
  public function __GET($k) { return $this -> $k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
