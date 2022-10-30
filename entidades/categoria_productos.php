<?php

class CategoriaProductos {

  // Attributes
  private $id_categoria_productos;


  // Methods
  public function __GET($k){ return $this->$k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
