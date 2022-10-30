<?php

class Usuario {

  // Attributes
  private $id_usuario;


  // Methods
  public function __GET($k){ return $this->$k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
