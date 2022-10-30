<?php

class RolUsuario {

  // Attributes
  private $id_rol_usuario;


  // Methods
  public function __GET($k){ return $this->$k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
