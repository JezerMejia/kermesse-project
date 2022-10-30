<?php

class Moneda {

  // Attributes
  private $id_moneda;


  // Methods
  public function __GET($k){ return $this->$k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
