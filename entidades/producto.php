<?php

class Producto {

  // Attributes
  private $id_producto;


  // Methods
  public function __GET($k){ return $this->$k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
