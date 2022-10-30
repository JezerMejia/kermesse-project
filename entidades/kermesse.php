<?php

class Kermesse {

  // Attributes
  private $id_kermesse;


  // Methods
  public function __GET($k){ return $this->$k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
