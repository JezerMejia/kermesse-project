<?php

class Comunidad {

  // Attributes
  private $id_comunidad;


  // Methods
  public function __GET($k){ return $this->$k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
