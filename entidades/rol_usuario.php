<?php

class RolUsuario {

  // Attributes
  private $id_rol_usuario;
  private $id_usuario;
  private $id_rol;

  // Methods
  public function __GET($k) { return $this -> $k; }
  public function __SET($k, $v) { $this -> $k = $v; }
}
