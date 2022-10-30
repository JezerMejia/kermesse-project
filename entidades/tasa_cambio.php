<?php

class TasaCambio {

  // Attributes
  private $id_tasa_cambio;


  // Methods
  public function __GET($k){ return $this->$k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
