<?php

class RolOpcion {

  // Attributes
  private $id_rol_opcion;
  private $id_rol;
  private $id_opcion;

  // Methods
  public function __GET($k) { return $this -> $k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
