<?php

class Gasto {

  // Attributes
  private $id_gasto;


  // Methods
  public function __GET($k){ return $this->$k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
