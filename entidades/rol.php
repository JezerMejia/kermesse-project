<?php

class Rol {

  // Attributes
  private $id_rol;


  // Methods
  public function __GET($k){ return $this->$k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
